<?php
namespace MVC\controller;

use MVC\core\controller;
use MVC\core\session;
use MVC\model\category;
use MVC\model\post;
use MVC\core\cookies;
use MVC\model\footer;
use MVC\model\home;
use MVC\controller\postscontroller;
class homecontroller extends controller{
    public $footer;
    function __construct()
    {
       
        //$session = new session;
        if(session::get("lang")==null){
            session::set("lang","en");
        }
        $footer = new footer();
        $this->footer = $footer->getlinks();
    }

    function index(){
        $home = new home;
        $category = new category;
        $lang = session::get("lang");
        $title ="homepage";
        $navbar = new navbarcontroller($title);
        $news =  $home->get_news();
        $category = $category->getcategory();
        $last = $home->get_last_update();
        $footer =$this->footer;
        $data = [
            
            'news'=>$news,
            "category"=>$category,
            "lastUpdate"=>$last,
            "about"=> $home->get_story(),
            "post"=> new post,
            'search'=> @new postscontroller
        ];
        $this->view("home/pages/homepage",['data'=>$data,'lang'=>$lang,'footer'=>$footer]);
        
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
        $title = "favorite";
        $navbar = new navbarcontroller($title);
        $post = new post;
       
        $favData = explode("%",cookies::get("fav"));
        $postData = $post->getAllPosts();
        $this->view("home/pages/favorite",['post'=>$post,'data'=>$postData,'lang'=>$lang,'favdata'=>$favData,'footer'=>$this->footer]);
    }

    function delete_favorite($id){
        $id = @$id[0];
       $old = cookies::get('fav');
       $old = explode("%",$old);
       if(in_array($id,$old)){
        $key = array_search($id,$old);
        unset($old[$key]);
       }
       $value = implode("%",$old);
       
       cookies::set('fav',$value);
       header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    function ourteam(){
        $home= new home;
        $lang = session::get("lang");
        $title ="our team";
        $navbar = new navbarcontroller($title);
        $data=[
            'team'=>$home->get_team(),
        ];
        $this->view("home/pages/ourteam",['data'=>$data,'lang'=>$lang,'footer'=>$this->footer]);
    }
    

}


?>