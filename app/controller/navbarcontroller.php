<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\navbar;

class navbarcontroller extends controller{
    function __construct()
    {
       $navbar = new navbar;
       $category = $navbar->getCategory();
       if(session::get("lang")==null){
        session::set("lang","en");
        }
        $lang = session::get("lang");
        $this->view("home/pages/$lang/navbar",['category'=>$category,'lang'=>$lang,'navbar'=>$navbar]);
    }
    
}

?>