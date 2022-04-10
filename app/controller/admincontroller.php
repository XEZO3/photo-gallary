<?php

namespace MVC\controller;
use MVC\core\controller;

class admincontroller extends controller{
    function index(){
        $this->view("home/admin/index",[]);
    }
}
?>