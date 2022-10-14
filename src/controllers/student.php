<?php

namespace Odc\Mvc\controllers;

use Odc\Mvc\core\BaseController;
use Odc\Mvc\core\validation;
use Odc\Mvc\core\session;
use Odc\Mvc\models\UserModel;

class student
{
    use BaseController;
    private $model;
    public function __construct()
    {
        $this->hideerrors();
        if (empty(session::get("user"))) {
            header("location:/user/login");
        } else {
            return $this->model = new UserModel;
        }
    }
    public function create()
    {
        return $this->view("students/create");
    }
    public function list()
    {
        $users = $this->model->getUsers();
        return $this->view("students/list", ["users" => $users]);
    }
    public function store()
    {
        $this->model->createNewUser($_POST);
        validation::min("email", $_POST['usereamil'], 4);
        echo "added new user successfuly.";
    }
    public function delete($id)
    {
        $this->model->deleteUser($id);
        return $this->redirect("student/list");
    }
    public function edit($id)
    {
        $user = $this->model->getUserById($id);
        return $this->view("students/update", ["user" => $user]);
    }
    public function update()
    {
        $this->model->updateUser($_POST, $_POST['userid']);
        return $this->redirect("student/list");
    }
}
