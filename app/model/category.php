<?php
namespace MVC\model;
use MVC\core\model;

class category extends model{

function getcategory(){
    return  model::db()->rows("select * from category where parent_id=?",[0]);

}
function get_category_parent($id){
    return  model::db()->row("select * from category where id=?",[@$id]);
}
// function get_post_parent($id){
//     return  model::db()->row("select * from category where id=?",[@$id]);
// }

function getCategoryName($id){
    $query=  model::db()->row("select * from category where id = ?",[$id]);
    
    return @$query->name_en;
}
function categoryInfo($id){
    return  model::db()->rows("select * from category where parent_id = ?",[$id]);
}
// function check($id){
//     $query= model::db()->rows("select * from category where parent_id = ?",[$id]);
//     if($query)

// }


}


?>