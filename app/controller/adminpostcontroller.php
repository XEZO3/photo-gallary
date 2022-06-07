<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\admincategory;
use MVC\model\adminpost;
use MVC\model\category;
use MVC\core\model;

class adminpostcontroller extends controller{
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

function index($id){
    $post = new adminpost;
    $lang = session::get("lang");
    $categoryData = $post->getCategory();
    $category = new admincategory;
    $postdata = (@$id[0] == null || !isset($id[0]))?$post->getposts():$post->getpostsByCategory($id[0]);
    $this->view("home/admin/posts",['data'=>$categoryData,'postdata'=>$postdata,'lang'=>$lang,'category'=>$category]);
}
function insertpost(){
    $post = new adminpost;
    
    $categoryData = $post->getCategory();
    $lang = session::get("lang");
    $this->view("home/admin/postinsert",['data'=>$categoryData,'lang'=>$lang]);
}
function insert(){
    $model = new model;
    $post = new adminpost;
    $images = $_FILES['images'];
    $num_of_imgs = count($images['name']);
    $postdata = [
        'title_ar'=> htmlspecialchars($_POST['title_ar']),
        'title_en'=> htmlspecialchars($_POST['title_en']),
        'title_fr'=> htmlspecialchars($_POST['title_fr']),
        'title_ru'=> htmlspecialchars($_POST['title_ru']),
        'title_tr'=> htmlspecialchars($_POST['title_tr']),
        'discribe_ar'=> htmlspecialchars($_POST['discreption_ar']),
        'discribe_en'=> htmlspecialchars($_POST['discreption_en']),
        'discribe_fr'=> htmlspecialchars($_POST['discreption_fr']),
        'discribe_ru'=> htmlspecialchars($_POST['discreption_ru']),
        'discribe_tr'=> htmlspecialchars($_POST['discreption_tr']),
        'category_id'=> htmlspecialchars($_POST['category_id'])
    ];
    $insertpost = $post->insertpost($postdata);
    $lasid =  $post->lastid();
    for ($i=0; $i < $num_of_imgs; $i++) { 
    	$image_name = $images['name'][$i];
    	$tmp_name   = $images['tmp_name'][$i];
    	$error      = $images['error'][$i];
    	if ($error === 0) {
            $file_ext = explode('.', $image_name);
            $file_ext = strtolower(end($file_ext));
            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($file_ext, $allowed)) {
                $new_name = uniqid('',true). '.' . $image_name;
                $path = "images/" . $new_name;
                    $dataimg = [
                    'image'=> $new_name ,
                    'post_id'=>$lasid 
                    ];    
                if(move_uploaded_file($tmp_name,$path)){
                    $images_insert  = $post->insertimage($dataimg);
                }
                
            }else{
                echo"this file type is not accepted";
            }
        }else{
            echo"some thing went error";
        }
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit; 
}
function updatepage($id){
    $post = new adminpost;
    $lang = session::get("lang");
    if(empty($id[0])){
        header("location:".PATH."adminpost");
        exit;
    }
    @$categoryData = $post->getCategory();
    @$postData =$post->getpostsByid($id[0]);
    @$images = $post->getPostImages($id[0]);
    $this->view("home/admin/postupdate",['postData'=>$postData,'categorydata'=>$categoryData,'lang'=>$lang,'images'=>$images,'id'=>$id[0]]);
}
function update($id){
    $post = new adminpost;
    if(isset($_POST['info'])){
    $postdata = [
        'title_ar'=> htmlspecialchars($_POST['title_ar']),
        'title_en'=> htmlspecialchars($_POST['title_en']),
        'title_fr'=> htmlspecialchars($_POST['title_fr']),
        'title_ru'=> htmlspecialchars($_POST['title_ru']),
        'title_tr'=> htmlspecialchars($_POST['title_tr']),
        'discribe_ar'=> htmlspecialchars($_POST['discreption_ar']),
        'discribe_en'=> htmlspecialchars($_POST['discreption_en']),
        'discribe_fr'=> htmlspecialchars($_POST['discreption_fr']),
        'discribe_ru'=> htmlspecialchars($_POST['discreption_ru']),
        'discribe_tr'=> htmlspecialchars($_POST['discreption_tr']),
        'category_id'=> htmlspecialchars($_POST['category_id'])
    ];
    $updatepost = $post->update("posts",$postdata,$id[0]);
}
    if(!empty($_FILES['images']['name'])&&isset($_POST['img'])){
        $images = $_FILES['images'];
        $num_of_imgs = count($images['name']);
        for ($i=0; $i < $num_of_imgs; $i++) { 
            $image_name = $images['name'][$i];
            $tmp_name   = $images['tmp_name'][$i];
            $error      = $images['error'][$i];
            if ($error === 0) {
                $file_ext = explode('.', $image_name);
                $file_ext = strtolower(end($file_ext));
                $allowed = array('jpg', 'jpeg', 'png','jfif');
                if (in_array($file_ext, $allowed)) {
                    $new_name = uniqid('',true). '.' . $image_name;
                    $path = "images/" . $new_name;
                        $dataimg = [
                        'image'=> $new_name ,
                        'post_id'=>$id[0] 
                        ];    
                    if(move_uploaded_file($tmp_name,$path)){
                        $images_insert  = $post->insertimage($dataimg);
                    }
                    
                }else{
                    echo"this file type is not accepted";
                }
            }else{
                echo"some thing went error";
            }
        }
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit; 
    
}
function deleteimage($id){
    $post = new adminpost;
    $oldname = $post->image_by_id($id[0]);
    @unlink("images/".$oldname);
    $delete = $post->delete("images",$id[0]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
}
function delete_all_img($id){
    $post = new adminpost;
   
    $delete = $post->deleteall("images",$id[0]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
}
function deletepost($id){
    $post = new adminpost;
    $delete = $post->delete("posts",$id[0]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    
}
function updatesimg($id){
    $post = new adminpost;
    $oldname = $post->image_by_id($id[0]);
    @unlink("images/".$oldname);
    $file = $_FILES['img'];
        $name = $file['name'];
	    $tmp = $file['tmp_name'];
	    $error = $file['error'];
	    $size = $file['size'];
        $file_ext = explode('.', $name);
	    $file_ext = strtolower(end($file_ext));
      
        //$folder = "/photoGalary/public/images/".$name;
        $new_name = uniqid('',true). '.' . $name;
        $dest = "images/" . $new_name;
        $data=[
            "image"=>htmlspecialchars($new_name)
        ];
   // $update= $post->updatecover(@$id[0],$data);
   if (move_uploaded_file($tmp, $dest)) {
   
    $update= $post->update("images",$data,@$id[0]);
    
   
         }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
}


?>