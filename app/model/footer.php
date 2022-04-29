<?php
namespace MVC\model;
use MVC\core\model;

class footer extends model{
    function getlinks()
    {
        return  model::db()->rows("select * from social_links ");
    }
    function insertlinks($data){
        
        return model::db()->insert("social_links",$data);
    }
    function deletelinks($id){
        return model::db()->delete("social_links",['id'=>$id]);
    }
    function updatelinks($data,$id){
        return model::db()->update("social_links",$data,['id'=>$id]);
    }
}



?>