<?php
namespace MVC\model;
use MVC\core\model;
class navbar {
    function getCategory(){
        return  model::db()->rows("select * from category where parent_id =? or parent_id=? ",[0,null]);
    }
    function checkCategory($id){
      $query = model::db()->count("select * from category where parent_id=? ",[$id]);
      return $query;
    }
    function getSubCategory($id){
        return  model::db()->rows("select * from category where parent_id=? ",[$id]);
    }
}

?>