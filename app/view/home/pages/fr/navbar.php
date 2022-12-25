<!doctype html>
<html lang="fr">
  <head>
  
  <script src="https://kit.fontawesome.com/18cbec86c9.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="<?=PATH?>css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=PATH?>css/mainforall.css" />
    <title><?=$title?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


 
  </head>
  <body class="d-flex flex-column min-vh-100  ">
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



               
                
  <div class="my-container">
  <header class="header" style="background-color:#F4F4F4 ;width:100%">
  <div class="container-fluid" style="margin: 0;padding:0">
  <div class="d-flex flex-row">
  <a class="btn" id="menu-btns" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="background-color: blue;">
            <div class="p-2 bd-highlight" style="margin-top: 5px" > 
               <!-- <button class="btn btn-primary" id="sidebarToggle"><i class="fa-solid fa-bars fa-lg"></i></button> -->
             <img src="<?=PATH?>icons/bar.webp" style="height:25px;width:25px;background-size:100% 100%;margin:0">
            <span style="color:white;font-weight:bold"> Menu</span>
            </div>
           </a>
  
           <div class="p-2 bd-highlight"> <a class="nav-link" href="<?=PATH?>"><span style="color:#014990;font-weight:bold;font-size:22px">Around </span><span style="color:#C41230;font-weight:bold;font-size:22px"> it</span></a></div>
   
    
    
    <div class="p-2 bd-highlight ms-auto">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="height:30px;width:30px" src="<?=PATH?>icons/world.webp"></a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?=PATH."home/setlanguage/ar"?>">العربية</a> 
                                    <a class="dropdown-item" href="<?=PATH."home/setlanguage/en"?>">english</a> 
                                    <a class="dropdown-item" href="<?=PATH."home/setlanguage/fr"?>">france</a> 
                                    <a class="dropdown-item" href="<?=PATH."home/setlanguage/ru"?>">russian</a> 
                                    <a class="dropdown-item" href="<?=PATH."home/setlanguage/tr"?>">turkey</a> 
                                </div>
                      </div>
                      <div class="p-2 bd-highlight">
                        <a class="nav-link" href="<?=PATH?>home/showfav">
                      <img style="height:30px;width:30px" src="<?=PATH?>icons/bookmark.webp">
                        </a>
                      </div>
   
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
      <div>
        <a href="<?=PATH?>" class="nav-link h3 text-white my-2">
        <span style="color:#014990;font-weight:bold;font-size:21px">Around </span><span style="color:#C41230;font-weight:bold;font-size:21px">it</span>
        </a>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" style="background-color:#014990 ;">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" >
        <?php foreach($category as $row): ?>
          <li class="nav-item">
            <a class="nav-link"href="<?=PATH?>home/categoryselect/<?=$row['id']?>">
            <span style="color:white;font-size:25px" class="mx-2"><?=$row["name_$lang"]?></span>
          </a>
          </li>
          <?php endforeach ?>
          <li class="nav-item">
            <a class="nav-link"href="<?=PATH?>category/ourteam">
            <span style="color:white;font-size:25px" class="mx-2">Our Team</span>
          </a>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
  </div>
  </header>