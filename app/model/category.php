<?php
namespace MVC\model;
use MVC\core\model;

class category {

function getcategory(){
    return  model::db()->rows("select * from category");

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