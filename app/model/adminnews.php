<?php 

namespace MVC\model;
use MVC\core\model;
use MVC\core\session;
class adminnews extends model {

function get_news(){
    return model::db()->rows("select news.category_id as categoryid,news.id as id,title_ar,title_en,title_fr,title_ru,title_tr,image from news join category where news.category_id = category.id");
}
function insert_news($data){
    return model::db()->insert('news', $data);
}
function update_news($data,$id){
    return model::db()->update("news",$data,['id'=>$id]);
}
function delete_news($id){
    return model::db()->delete("news",['id'=>$id]);
}
function get_by_id($id){
    return model::db()->row("select * from news where id=?",[$id]);
}


}
?>