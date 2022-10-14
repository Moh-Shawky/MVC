<?php
namespace Odc\Mvc\core;

class session{
    public static function start(){
        session_start();
    }
      public static function set($key,$value){
        self::start();
        $_SESSION[$key] = $value;
    }
    public static function get($key){
        self::start();
        return $_SESSION[$key];
    }
    public static function end(){
        self::start();
        session_destroy();
        session_unset();
    }
  
}