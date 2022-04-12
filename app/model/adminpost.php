<?php
namespace MVC\model;
use MVC\core\model;
use MVC\core\session;
class adminpost {
function getCategory(){
    return  model::db()->rows("SELECT * FROM `category` WHERE id NOT in (SELECT parent_id from category)");
}
function getposts(){
    return  model::db()->rows("select * from posts");
}
function getpostsByCategory($id){
    return  model::db()->rows("select * from posts where category_id = ?",[$id]);
}
function insertimage($data){
    return model::db()->insert('images', $data);

}
function insertpost($data){
     return model::db()->insert('posts', $data);

}
}


?>