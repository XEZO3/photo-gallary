<?php
namespace MVC\model;
use MVC\core\model;

class admincategory extends model{

function getcategory(){
    return  model::db()->rows("select * from category");

}
function delete($id){
    return  model::db()->run('DELETE FROM `category` WHERE id = ? or parent_id =?', [$id,$id]);
}
function insert($data){
    return  model::db()->insert('category',$data);
}
function update($data,$id){
    return  model::db()->update('category',$data,['id'=>$id]);
}
function getCategoryName($id,$lang){
    $query=  model::db()->row("select * from category where id = ?",[$id]);
    
    return @$query["name_$lang"];
}
function categoryInfo($id){
    return  model::db()->rows("select * from category where parent_id = ?",[$id]);
}
function get_subcategory(){
    return  model::db()->rows("SELECT * FROM `category` WHERE id NOT in (SELECT parent_id from category)");
}
function get_category_parent($id){
    return  model::db()->row("select * from category where id=(select posts.category_id from posts where posts.id = ? )",[@$id]);
}
function get_sub_Category(){
    return  model::db()->rows("SELECT * FROM `category` WHERE id NOT in (SELECT parent_id from category)");
}
function get_categoryParents($id){
    return  model::db()->row("select * from category where id=?",[$id]);
}
// function check($id){
//     $query= model::db()->rows("select * from category where parent_id = ?",[$id]);
//     if($query)

// }


}


?>