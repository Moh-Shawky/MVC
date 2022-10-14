<?php

namespace Odc\Mvc\controllers;

use Odc\Mvc\core\BaseController;

use Odc\Mvc\core\session;

class Home
{
    use BaseController;
    public function index()
    {
        $this->hideerrors();
        if (empty(session::get("user"))) {
            header("location:/user/login");
        } else {
            session::start();
            echo "Home Page";
        }
    }
}
