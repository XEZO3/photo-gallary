<?php
namespace MVC\controller;

use MVC\core\controller;
use MVC\core\session;
use MVC\model\category;
use MVC\model\post;
use MVC\core\cookies;
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
        $post = new post;
        $datacategpry = $category->categoryInfo($id[0]);
        if(empty($datacategpry)){
            $datapost = $post->getcategorypost($id[0]);
            
        $this->view("home/pages/showpost",['title'=>"homepage",'data'=>$datapost,'lang'=>$lang,'post'=>$post]);
        }else{
        $this->view("home/pages/showcategory",['title'=>"homepage",'data'=>$datacategpry,'lang'=>$lang]);
        }
    }
    function postinfo($id){
        $lang = session::get("lang");
        $navbar = new navbarcontroller;
        @$post = new post;
        @$postinfo = $post->getpost($id[0]);
        @$main_image = $post->getmainimage($id[0]);
        @$images = $post->getpostimages($postinfo['id']);
        $this->view("home/pages/postinfo",['postinfo'=>$postinfo,'images'=>$images,'lang'=>$lang,'main'=>$main_image]);
        
    }
    function add_favorite($id){
       echo @$id[0];
       $id = @$id[0];
       $old = cookies::get('fav');
       $old = explode("%",$old);
       if(in_array($id,$old)){
           echo"you already";
       }else{
        $value = (cookies::get('fav') != null) ? cookies::get('fav')."%".$id : $id;
        cookies::set('fav',$value);
       }
       header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
      
    }
    function showfav(){
        $lang = session::get("lang");
        $navbar = new navbarcontroller;
        $post = new post;
        $favData = explode("%",cookies::get("fav"));
        $postData = $post->getAllPosts();
        $this->view("home/pages/favorite",['post'=>$post,'data'=>$postData,'lang'=>$lang,'favdata'=>$favData]);
    }
    function delete_favorite($id){

    }

}


?>