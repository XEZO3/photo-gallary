<?php 

echo $_SESSION['lang']
?>
    
    <form method="POST" action="/task1mvc/public/user/postlogin">
        <input type="text" name="username" >
        <input type="password" name="password" >
    <input type="submit" >
    </form>
<?php 
include("footer.php");
?>