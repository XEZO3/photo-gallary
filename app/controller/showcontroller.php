<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\category;

class showcontroller extends controller{

    function __construct()
    {
        $session = new session;
        $navbar = new navbarcontroller;
    }
    function index(){
        $category = new category;
        $data = $category->getcategory();
        
        $this->view("home/pages/show",['data'=>$data]);
    }
    function selected($id){
        $category = new category;
        $data =  $category->categoryInfo($id[0]);
        
        $this->view("home/pages/show",['data'=>$data]);
    }
}
?>