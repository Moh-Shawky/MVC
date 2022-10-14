<?php

namespace Odc\Mvc\controllers;

use Odc\Mvc\core\BaseController;
use Odc\Mvc\core\db;
use Odc\Mvc\core\session;
use Odc\Mvc\core\validation;

class User
{
    use BaseController;
    private $model;
    public function index($id)
    {
        $db = new db;
        $user =  $db->select("users", "*")->where("userid", "=", $id)->first();
        // $usermodel = new UserModel;
        // $user =  $usermodel->getUserById(1);
        return $this->view("index", ["user" => $user]);
    }
    public function login()
    {
        return $this->view("login");
    }
    public function requestlogin()
    {
        $db = new db;
        $validation = new validation;
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($validation->min("email", $email, 5) && $validation->required("password", $password) && $validation->required("email", $email) ) {
            $user = $db->select("users", "*")->where("useremail", "=", $email)->andWhere("userpassword", "=", $password)->first();
        };
        $validation->message();
        // foreach ($validation->message() as $error) {
        //     echo $error;
        // }

        if (!empty($user)) {
            session::set("user", $email);
            return $this->redirect("student/list");
        } else {
            return $this->view("login");
        }
    }
    public function logout()
    {
        session::end();
        return $this->view("login");
    }
}
