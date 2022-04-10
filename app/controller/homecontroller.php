<?php
namespace MVC\controller;

use MVC\core\controller;
use MVC\core\session;
use MVC\model\category;
class homecontroller extends controller{
    function __construct()
    {
       
        $session = new session;
        if(session::get("lang")==null){
            session::set("lang","en");
        }
    }

    function index(){
        $navbar = new navbarcontroller;
        $this->view("home/pages/homepage",['title'=>"homepage"]);
        
    }
    function categoryselect($id){
        $lang = session::get("lang");
        $navbar = new navbarcontroller;
        $category = new category;
        
        $data = $category->categoryInfo($id[0]);
        if(empty($data)){
        $this->view("home/pages/showpost",['title'=>"homepage",'data'=>$data,'lang'=>$lang]);
        }else{
        $this->view("home/pages/showcategory",['title'=>"homepage",'data'=>$data,'lang'=>$lang]);
        }
    }

}


?>