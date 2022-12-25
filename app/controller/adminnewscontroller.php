<?php
namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\admincategory;
use MVC\model\adminnews;

class adminnewscontroller extends controller {
    function __construct()
    {
        //$session = new session;
    if(session::get("lang")==null){
        session::set("lang","en");
    }
    if(session::get("username")==null){
        header("location:".PATH."user/");
        exit;
    }
    }
function index(){
    $news = new adminnews;
    $lang =  session::get("lang");
    $category = new admincategory;
    $data=[
        'news'=>$news->get_news(),
        'category'=> $category->get_subcategory(),
        'main'=> $category
    ];
    $this->view("home/admin/news",['lang'=>$lang,'data'=>$data]);
}
function delete_news($id){
    $news = new adminnews;
    $oldimg = $news->get_by_id(@$id[0])['image'];
    @unlink("images/".$oldimg);
    $delete = $news->delete_news(@$id[0]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
}
function insert_news(){
    $news = new adminnews;
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
    $data=[
        'title_ar'=>htmlspecialchars($_POST['title_ar']),
        'title_en'=>htmlspecialchars($_POST['title_en']),
        'title_fr'=>htmlspecialchars($_POST['title_fr']),
        'title_ru'=>htmlspecialchars($_POST['title_ru']),
        'title_tr'=>htmlspecialchars($_POST['title_tr']),
        'image'=>htmlspecialchars($new_name),
        'category_id'=>htmlspecialchars($_POST['category_id'])
    ];
    if (move_uploaded_file($tmp, $dest)) {
    $insert = $news->insert_news($data);
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
}
function update_news($id){
    $data=[
        'title_ar'=>htmlspecialchars($_POST['title_ar']),
        'title_en'=>htmlspecialchars($_POST['title_en']),
        'title_fr'=>htmlspecialchars($_POST['title_fr']),
        'title_ru'=>htmlspecialchars($_POST['title_ru']),
        'title_tr'=>htmlspecialchars($_POST['title_tr']),
       
    ]; 
    $news = new adminnews;
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
        if(empty($_POST['category_id'])){
        $data2 =[
        'image'=>htmlspecialchars($new_name),
        ];
    }else{
        $data2 =[
            'image'=>htmlspecialchars($new_name),
            'category_id'=>htmlspecialchars($_POST['category_id'])
            ]; 
    }
        
    
    if (move_uploaded_file($tmp, $dest)) {
        $mdata=$data+$data2;
        $update = $news->update_news($mdata,@$id[0]);
    }
    }else{
        if(!empty($_POST['category_id'])){
            $data2=[
                'category_id'=>htmlspecialchars($_POST['category_id'])
            ];
        }
        
        $update = $news->update_news($data+$data2,@$id[0]); 
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
}
}

?>