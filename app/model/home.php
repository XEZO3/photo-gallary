<?php
namespace MVC\model;
use MVC\core\model;

class home extends model{
    function get_news(){
        return model::db()->rows("select * from news");
    }
}