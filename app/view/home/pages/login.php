<?php 


?>
    <div class="container">
        <div class="row justify-content-center">
    <form method="POST" style="width: 35rem;margin-top:9rem" action="<?=PATH?>user/postlogin">
    <div class="mb-3">
    <label class="form-label">username</label>
    <input type="text" class="form-control" name="username" >
  </div>
  <div class="mb-3">
    <label class="form-label">password</label>
    <input type="password" class="form-control" name="password">
  </div>
    <input class="btn btn-primary" type="submit" >
    </form>
        </div>
    </div>
<?php 
include("footer.php");
?>