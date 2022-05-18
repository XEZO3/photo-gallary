<?php
namespace MVC\model;
use MVC\core\model;
use MVC\core\session;
class adminpost extends model {
function getCategory(){
    return  model::db()->rows("SELECT * FROM `category` WHERE id NOT in (SELECT parent_id from category)");
}
function getposts(){
    return  model::db()->rows("select * from posts");
}
function getpostsByCategory($id){
    return  model::db()->rows("select * from posts where category_id = ?",[$id]);
}
function getpostsByid($id){
    return  model::db()->row("select * from posts where id = ?",[$id]);
}
function insertimage($data){
    return model::db()->insert('images', $data);

}
function insertpost($data){
     return  model::db()->insert('posts', $data);

}
function getPostImages($id){
    return  model::db()->rows("select * from images where post_id = ?",[$id]);
}
function delete($name,$id){
    
        return  model::db()->run("DELETE FROM `$name` WHERE id = ? ", [$id]);   
}
function deleteall($name,$id){
    
    return  model::db()->run("DELETE FROM `$name` WHERE post_id = ? ", [$id]);   
}

function update($name,$data,$id){
    return  model::db()->update($name,$data,['id'=>$id]);
}
function lastid(){
    return  model::db()->lastInsertId();

}
function image_by_id($id){
     $query = model::db()->row("select * from images where id = ?",[$id]);
     return $query['image'];
}
}


?>