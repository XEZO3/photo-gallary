<?php 

namespace MVC\model;
use MVC\core\model;
use MVC\core\session;
class admininfo extends model {
    function get_story(){
        return  model::db()->row("select * from about limit 1");
    }
    
    function insertinfo($data){
        return model::db()->insert("about",$data);
    }
    function updateinfo($data,$id){
        $where=[
            "id"=>$id
        ];
        return model::db()->update("about",$data,$where);
    }
    function deleteinfo($id){
        return model::db()->delete("about",['id'=>$id]);
    }
    function add_team($data){
        return model::db()->insert("team",$data);
    }
    function get_team(){
        return  model::db()->rows("select * from team ");
    }
    function delete_team($id){
        return model::db()->delete("team",['id'=>$id]);
    }
    function update_team($data,$id){
        $where=[
            "id"=>$id
        ];
        return model::db()->update("team",$data,$where);
    }
}
?>