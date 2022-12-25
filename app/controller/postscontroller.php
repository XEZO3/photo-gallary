<?php


namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\category;
use MVC\model\post;
use MVC\core\cookies;
use MVC\model\footer;
use MVC\model\home;
class postscontroller extends controller{
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

        function postinfo($id){
            $lang = session::get("lang");
            
             $title = "post info";
            $navbar = new navbarcontroller($title);
            @$post = new post;
           
            @$postinfo = $post->getPostInfo($id[0]);
            @$main_image = $post->getmainimage($id[0]);
            @$images = $post->getpostimages($postinfo['id']);
            $this->view("home/pages/postinfo",['postinfo'=>$postinfo,'images'=>$images,'lang'=>$lang,'main'=>$main_image,'footer'=>$this->footer]);
            
        
    }
    function search_post(){
        @$post = new post;
        $lang = session::get("lang");
        return $post->search_posts($lang,"fiat");
    }
}

?>