<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("CONFIG",APP.DS.'config');
define("CONTROLLER",APP.DS.'controller');
define("VIEW",APP.DS.'view'.DS);
define("CORE",APP.DS.'core');
define("MODEL",APP.DS.'model');
define("CSS",'/task1mvc/public');
define("PATH","/photogalary/public/");
//echo VIEW;
require_once("../vendor/autoload.php");
$app = new MVC\core\app();


?>