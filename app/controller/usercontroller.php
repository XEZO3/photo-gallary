<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\navbar;

class usercontroller extends controller{
    function __construct()
    {
        $session = new session;
    }
    function index(){
        $navbar = new navbarcontroller;
        $this->view("home/pages/login",[]);
    }
}
?>