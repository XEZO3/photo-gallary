<?php

namespace MVC\core;
class cookies {
    static function set($name,$value){
        setcookie($name, $value, time()+3600*24*30, "/" );
    }
    static function get($name){
        return (isset($_COOKIE[$name])) ?$_COOKIE["$name"] :"";
    }
    static function delete($name){
        if(isset($_COOKIE["$name"])){
        setcookie($name, "",time()-3600*24*30);
        }
    }
}