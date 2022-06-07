<?php
namespace MVC\model;
use MVC\core\model;

class home extends model{
    function get_news(){
        return model::db()->rows("select * from news");
    }
    function get_last_update(){
        return model::db()->rows("SELECT * FROM posts ORDER BY id DESC LIMIT 5;");
    }
    function get_story(){
        return model::db()->row("SELECT * FROM about limit 1");
    }
    function get_team(){
        return model::db()->rows("SELECT * FROM team");  
    }
}