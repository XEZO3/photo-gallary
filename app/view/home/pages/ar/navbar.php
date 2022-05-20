<!doctype html>
<html lang="en">
  <head>
  <script src="https://kit.fontawesome.com/18cbec86c9.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?=PATH?>css/styles.css" rel="stylesheet" />
    
    <title><?=$title?></title>

   <style>

.dropdown-menu li {
  position: relative;
}
.dropdown-menu .dropdown-submenu {
  display: none;
  position: absolute;
  left: 100%;
  top: -7px;
}
.dropdown-menu .dropdown-submenu-left {
  right: 100%;
  left: auto;
}
.dropdown-menu > li:hover > .dropdown-submenu {
  display: block;
}
.p-2 >.nav-link{
  color: black;
}
   </style>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


 
  </head>
  <body class="d-flex flex-column min-vh-100 sb-sidenav-toggled ">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
                <div class="list-group list-group-flush">
                 
                    <?php foreach($category as $row): ?>
            
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=PATH?>home/categoryselect/<?=$row['id']?>"><?=$row["name_$lang"]?></a>
            
            <?php endforeach ?>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <header class="header" style="background-color:#F4F4F4 ;">
               
                    <div class="container-fluid" style="margin: 0;padding:0">
                    <div class="d-flex flex-row">
                    <button class="btn" id="sidebarToggle" style="background-color: blue;padding-left:0">
                      <div class="p-2 bd-highlight" > 
                      <!-- <button class="btn btn-primary" id="sidebarToggle"><i class="fa-solid fa-bars fa-lg"></i></button> -->
                      <img src="<?=PATH?>icons/bar.png" style="height:30px;width:33px;background-size:100% 100%;margin:0">
                    <span style="color:white;font-weight:bold"> القائمة</span>
                    </div>
                    </button>
                    
                    <div class="p-2 bd-highlight"> <a class="nav-link" href="<?=PATH?>"><span style="color:#014990;font-weight:bold;font-size:22px">Around </span><span style="color:#C41230;font-weight:bold;font-size:22px"> it</span></a></div>
                      <!-- <div class="p-2 bd-highlight"> <a class="nav-link" href="#!"><img style="height:40px;width:40px" src="<?=PATH?>icons/world.png"></a></div>    -->
                      <div class="p-2 bd-highlight ms-auto">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="height:35px;width:35px" src="<?=PATH?>icons/world.png"></a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?=PATH."/home/setlanguage/ar"?>">العربية</a> 
                                    <a class="dropdown-item" href="<?=PATH."/home/setlanguage/en"?>">english</a> 
                                    <a class="dropdown-item" href="<?=PATH."/home/setlanguage/fr"?>">france</a> 
                                    <a class="dropdown-item" href="<?=PATH."/home/setlanguage/ru"?>">russian</a> 
                                    <a class="dropdown-item" href="<?=PATH."/home/setlanguage/tr"?>">turkey</a> 
                                </div>
                      </div>
                      <div class="p-2 bd-highlight">
                        <a class="nav-link" href="<?=PATH?>home/showfav">
                      <img style="height:35px;width:35px" src="<?=PATH?>icons/bookmark.png">
                        </a>
                      </div>
                   
                    </div>
                    </div>
</header>
                <!-- Page content-->
                
           