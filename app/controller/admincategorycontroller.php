<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\model\admincategory;
class admincategorycontroller extends controller{
    function index(){
        $category = new admincategory;
        $data = $category->getcategory();
        $urls = explode("/",$_SERVER['QUERY_STRING']);
        $this->view("home/admin/category",['rows'=>$data,'category'=>$category,'url'=>$urls]);
    }
    
    function delete($id){
        $category = new admincategory;
        $delete = $category->delete($id[0]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
    }
    function insert(){
        $category = new admincategory;
        
        $file = $_FILES['uploadfile'];
        $name = $file['name'];
	    $tmp = $file['tmp_name'];
	    $error = $file['error'];
	    $size = $file['size'];
        $file_ext = explode('.', $name);
	    $file_ext = strtolower(end($file_ext));
      
        //$folder = "/photoGalary/public/images/".$name;
        $new_name = uniqid('',true). '.' . $name;
        $dest = "images/" . $new_name;
        $state = true;
        $data = [
            'name_ar'=> htmlspecialchars($_POST['name_ar']),
            'name_en'=> htmlspecialchars($_POST['name_en']),
            'name_fr'=> htmlspecialchars($_POST['name_fr']),
            'name_ru'=> htmlspecialchars($_POST['name_ru']),
            'name_tr'=> htmlspecialchars($_POST['name_tr']),
            'parent_id'=>htmlspecialchars($_POST['parent_id']),
            'icon'=>htmlspecialchars($new_name)
        ];
       
     		if (move_uploaded_file($tmp, $dest)) {
        
            
           
        
        $insert = $category->insert($data);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit; 
             }
       
    }
    function update($id){
        $category = new admincategory;
        $data = [
            'name_ar'=> htmlspecialchars($_POST['name_ar']),
            'name_en'=> htmlspecialchars($_POST['name_en']),
            'name_fr'=> htmlspecialchars($_POST['name_fr']),
            'name_ru'=> htmlspecialchars($_POST['name_ru']),
            'name_tr'=> htmlspecialchars($_POST['name_tr']),
            'parent_id'=>htmlspecialchars($_POST['parent_id']),
        ];
       
       
        $update = $category->update($data,$id[0]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
        
    }
    function categoryInfo($id){
        $category = new admincategory;
        $info = $category->categoryInfo($id[0]);
        $this->view("home/admin/categoryinfo",['info'=>$info,'id'=>$id[0],'name'=>$category->getCategoryName($id[0])]);
    }
}
?>