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
    function getuser($username,$password){
    return model::db()->row("SELECT * FROM users WHERE `username` = ? and `password` = ?", [$username,$password]);
    }
    function update_token($token,$username,$password){
      return model::db()->update('users', ['token' => $token],['username'=>$username,'password'=>$password]);
    }
    // function setter($return){
    //   $rows= model::db()->rows("SELECT * FROM users WHERE `token` = ? ", [cookies::get("token")]);
    //    foreach($rows as $row){
    //      return $row->$return;
    //    }
    // }
    static function  getuserid($id){
      $row= model::db()->row("SELECT * FROM users WHERE id=?",[$id]);
      return $row->username;
    }
    
}

?>