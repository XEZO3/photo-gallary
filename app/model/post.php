<?php
namespace MVC\model;
use MVC\core\model;

class post extends model{
    function getcategorypost($id){
        return  model::db()->rows("select * from posts where category_id = ?",[$id]);
    }
    function getpost($id){
        return  model::db()->row("select * from posts where id = ?",[$id]);
    }
    function getmainimage($id){
       $query =  model::db()->row("select * from images where post_id = ? order by id",[$id]);
       return $query['image'];
    }
    function getpostimages($id){
        return  model::db()->rows("select * from images where post_id = ?",[$id]);
    }
    function getAllPosts(){
        return  model::db()->rows("select * from posts  ",[]);
    }
}