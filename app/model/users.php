<?php
namespace MVC\model;
use MVC\core\model;
use MVC\core\session;
class users extends model{
  
  function __construct()
  {
  
  }
    function getusers(){
      return  model::db()->rows("select * from users");
        
    }
    function adduser($data){
      return  model::db()->insert('users',$data);
    }
    function deleteuser($id){
      return  model::db()->run("DELETE FROM users WHERE id = ? ", [$id]);
    }
    function updateuser($data,$id){
      return  model::db()->update("users",$data,['id'=>$id]);
    }
    function getuser($username,$password){
    return model::db()->row("SELECT * FROM users WHERE `username` = ? ", [$username]);
    }
    
    static function  getuserid($id){
      $row= model::db()->row("SELECT * FROM users WHERE id=?",[$id]);
      return $row->username;
    }
    
}

?>