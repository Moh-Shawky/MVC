<?php
namespace Odc\Mvc\core;

trait BaseController{
    public function __call($name, $arguments)
    {
        echo "method not found ".$name;
    }
    protected function view($path,$data = []){
        extract($data);
        include "../src/views/".$path.".php";
    }
    protected function redirect($path){
        $url = "http://".$_SERVER['SERVER_NAME']."/".$path;
        return header("location: $url");
    }
    protected function hideerrors(){
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(-1);
    }
}