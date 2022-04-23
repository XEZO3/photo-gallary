<?php

namespace MVC\core;

class session{
function __construct()
{
    session_start();

}

static function get($name){
return @$_SESSION[$name];
}
static function set($name,$value){
    @$_SESSION[$name] = $value;
}
static function destroy(){
    session_destroy();
}
}
?>