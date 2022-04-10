<?php
namespace MVC\core;
use MVC\core\session;
class controller{
    function __construct()
    {
        
    }
    function view($path,$parm){
        extract($parm);
        
        include(VIEW.$path.'.php');
       
        
    }
    function setLanguage($lang){
        $languages = ["ar","en","fr","ru","tr"];

        if(in_array($lang[0],$languages)){
            session::set("lang",$lang[0]);
        }
       
        echo session::get("lang");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    
}

?>