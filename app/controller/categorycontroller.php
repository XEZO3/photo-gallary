<?php


namespace MVC\controller;

use MVC\core\controller;
use MVC\core\session;
use MVC\model\category;
use MVC\model\post;
use MVC\core\cookies;
use MVC\model\footer;
use MVC\model\home;

class categorycontroller extends controller{
    public $footer;
    function __construct()
    {
       
       // $session = new session;
        if(session::get("lang")==null){
            session::set("lang","en");
        }
        $footer = new footer();
        $this->footer = $footer->getlinks();
    }
    function categoryselect($id){
        $lang = session::get("lang");
        
        $category = new category;
        
        $post = new post;
        $datacategpry = $category->categoryInfo($id[0]);
        $prev_page = $this->get_path($id[0]);
        if(empty($datacategpry)){
            $datapost = $post->GetPostByCategory($id[0]);
            //$prev_page = $this->test($id); 
            $title = "posts"; 
            $navbar = new navbarcontroller($title);
        $this->view("home/pages/showpost",['data'=>$datapost,'lang'=>$lang,'post'=>$post,'footer'=>$this->footer,"prev"=>$prev_page]);
       
        }else{
            $title = "categorys";
            //$prev_page = [$this->test($id)];
            $navbar = new navbarcontroller($title);
        $this->view("home/pages/showcategory",['data'=>$datacategpry,'lang'=>$lang,'footer'=>$this->footer,"prev"=>$prev_page]);
        
        }
    }
    function get_path($ids){
        $category = new category;
       $id =$ids;
       $parents =[];
        while($id!=0){
             $prev = $category->get_category_parent($id);
             $id = $prev["parent_id"];
            $parents[]=$prev;
        }

       
        
        return array_reverse($parents);
    }
}

?>