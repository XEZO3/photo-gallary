<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\admincategory;
use MVC\model\adminpost;
use MVC\model\category;

class adminpostcontroller extends controller{
function __construct()
{
    $session = new session;
    if(session::get("lang")==null){
        session::set("lang","en");
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
    $this->view("home/admin/postinsert",[]);
}
function insert(){
    $post = new adminpost;
    $images = $_FILES['images'];
    $num_of_imgs = count($images['name']);
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
                $data = [
                    'image'=> $new_name ,
                    'post_id'=>1
                ];
                
                if(move_uploaded_file($tmp_name,$path)){
                    $images_insert  = $post->insertimage($data);
                }
            }
        }
    }
}
}


?>