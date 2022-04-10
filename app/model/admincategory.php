<?php
namespace MVC\model;
use MVC\core\model;

class admincategory {

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