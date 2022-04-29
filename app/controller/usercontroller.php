<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\footer;
use MVC\model\navbar;
use MVC\model\users;

class usercontroller extends controller{
    function __construct()
    {
        $session = new session;
    }
    function index(){
        $footer = new footer;
        $title = "posts"; 
       $data = $footer->getlinks();
        $navbar = new navbarcontroller($title);
        $this->view("home/pages/login",['footer'=>$data]);
    }
    function postlogin(){
        if(session::get('username') !=null and session::get('userid')!=null){
            header("location:".PATH."admin");
            exit;
        }
        $username = htmlspecialchars($_POST['username']);
        //echo $username;
        $password = htmlspecialchars($_POST['password']);
       
        $user = new users;
        $query = $user->getuser($username,$password);
        if($query){
            if(password_verify($password, $query['password'])){
              
                session::set("username",$username);
                session::set('userid',$query['id']);
                header("location:".PATH."admin");
                exit;
            }else{
                header("location:".PATH."user");
                exit;
            }
            
        }else{
            header("location:".PATH."user");
            exit;
        }
        
    }
}
?>