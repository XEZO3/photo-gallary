<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\users;

class admincontroller extends controller{
    function __construct()
    {
        $session =  new session;
        if(session::get("lang")==null){
            session::set("lang","en");
        }
        if(session::get("username")==null){
            header("location:".PATH."user/");
            exit;
        }
    }
    function index(){
        $this->view("home/admin/index",[]);
    }
    function users(){
        $users = new users;
        $data = $users->getusers();
        $this->view("home/admin/users",['data'=>$data]);
    }
    function adduser(){
        $users = new users;
        $data =  [
            'username'=> htmlspecialchars($_POST['username']),
            'password'=> htmlspecialchars(password_hash($_POST['password'],PASSWORD_DEFAULT))
        ];
        $add = $users->adduser($data);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    function deleteuser($id){
        $users = new users;
        $delete = $users->deleteuser(@$id[0]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    function logout(){
        session::destroy();
        header('Location:'.PATH."user");
        exit;
    }
    function updateuser($id){
        $users = new users;
        if(!empty($_POST['password'])){
            $data =  [
                'username'=> htmlspecialchars($_POST['username']),
                'password'=> htmlspecialchars(password_hash($_POST['password'],PASSWORD_DEFAULT))
            ];
        }else{
            $data =  [
                'username'=> htmlspecialchars($_POST['username']),
               
            ];  
        }
        
        $update = $users->updateuser($data,@$id[0]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
?>