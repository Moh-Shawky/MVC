<?php

namespace Odc\Mvc\models;

use Odc\Mvc\core\db;

class UserModel extends db{

    protected const TABLE = "users";
    public function createNewUser($data){
        return $this->insert(self::TABLE,$data)->excute();

    }
    public function getUsers(){
        // echo self::TABLE;die;
        return $this->select(self::TABLE,"*")->all();
    }
    public function getUserById($id){
       return  $this->select(self::TABLE,"*")->where("userid","=",$id)->first();
    }

    public function deleteUser($id){
        return $this->delete(self::TABLE)->where("userid","=",$id)->excute();
    }

    public function updateUser($data,$id){
        return $this->update(self::TABLE,$data)->where("userid","=",$id)->excute();
    }
    

}