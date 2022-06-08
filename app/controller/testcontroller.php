<?php

namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\category;
class testcontroller extends controller{
    function index(){
        $t =$this->test(18);
        foreach($t as $tt){
            echo $tt['name_ar'];
        }
    }
    function test($ids){
        $category = new category;
       $id =$ids;
       $parents =[];
        while($id!=0){
             $prev = $category->get_category_parent($id);
             $id = $prev["parent_id"];
            $parents[]=$prev;
        }

        // print_r($parents);
        
        return $parents;

    }
}


?>