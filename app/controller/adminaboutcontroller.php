<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\admincategory;
use MVC\model\admininfo;
class adminaboutcontroller extends controller{
    function __construct()
{
    $session = new session;
    if(session::get("lang")==null){
        session::set("lang","en");
    }
    if(session::get("username")==null){
        header("location:".PATH."user/");
        exit;
    }
}
    function info(){
        $lang = session::get("lang");
        $info = new admininfo;
        $data=[
            "info"=> $info->get_story(),
           
        ];

        $this->view("home/admin/info",["data"=>$data,"lang"=>$lang]);
    }
    function team(){
        $lang = session::get("lang");
        $info = new admininfo;
        $data=[
            'team'=>$info->get_team()
        ];
        $this->view("home/admin/team",['data'=>$data,'lang'=>$lang]);
    }
    function insert_team(){
        $file = $_FILES['image'];
        $name = $file['name'];
	    $tmp = $file['tmp_name'];
	    $error = $file['error'];
	    $size = $file['size'];
        $file_ext = explode('.', $name);
	    $file_ext = strtolower(end($file_ext));
      
        //$folder = "/photoGalary/public/images/".$name;
        $new_name = uniqid('',true). '.' . $name;
        $dest = "images/" . $new_name;
        $info = new admininfo;
        $data = [
            "name"=>htmlspecialchars($_POST['story_ar']),
            "exp"=>htmlspecialchars($_POST['story_en']),
            "image"=>htmlspecialchars($new_name),
            
        ];
        if (move_uploaded_file($tmp, $dest)) {
            $insert = $info->add_team($data);
            }
        
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    function delete_team($id){
        $info = new admininfo;
        $delete = $info->delete_team(@$id[0]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    function update_team($id){
        $info = new admininfo;
        if(!empty($_FILES['image']['name'])){
        $file = $_FILES['image'];
        $name = $file['name'];
	    $tmp = $file['tmp_name'];
	    $error = $file['error'];
	    $size = $file['size'];
        $file_ext = explode('.', $name);
	    $file_ext = strtolower(end($file_ext));
      
        //$folder = "/photoGalary/public/images/".$name;
        $new_name = uniqid('',true). '.' . $name;
        $dest = "images/" . $new_name;
        $info = new admininfo;
        $data = [
            "name"=>htmlspecialchars($_POST['name']),
            "exp"=>htmlspecialchars($_POST['exp']),
            "image"=>htmlspecialchars($new_name),
            
        ];
        if (move_uploaded_file($tmp, $dest)) {
            $insert = $info->update_team($data,@$id[0]);
            }
        
        }else{
            $data = [
                "name"=>htmlspecialchars($_POST['name']),
                "exp"=>htmlspecialchars($_POST['exp']),
                
                
            ]; 
            $insert = $info->update_team($data,@$id[0]); 
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    function insertinfo(){
        $info = new admininfo;
        $data = [
            "story_ar"=>htmlspecialchars($_POST['story_ar']),
            "story_en"=>htmlspecialchars($_POST['story_en']),
            "story_fr"=>htmlspecialchars($_POST['story_fr']),
            "story_ru"=>htmlspecialchars($_POST['story_ru']),
            "story_tr"=>htmlspecialchars($_POST['story_tr']),
        ];
        $insert = $info->insertinfo($data);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    function updateinfo($id){
        $lang = session::get("lang");
        $info = new admininfo;
        $data=[
            "story_$lang"=>htmlspecialchars($_POST["story_$lang"]),
            
        ];
        $update = $info->updateinfo($data,@$id[0]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    function deleteinfo($id){
        $info = new admininfo;
        $delete = $info->deleteinfo(@$id[0]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}