<!doctype html>
<html lang="en">
  <head>
  
  <script src="https://kit.fontawesome.com/18cbec86c9.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?=PATH?>css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=PATH?>css/mainforall.css" />
    <title><?=$title?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


 
  </head>
  <body class="d-flex flex-column min-vh-100  ">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



            <!-- Sidebar-->
            <!-- <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
                <div class="list-group list-group-flush">
                 
                    <?php foreach($category as $row): ?>
            
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=PATH?>home/categoryselect/<?=$row['id']?>"><?=$row["name_$lang"]?></a>
            
            <?php endforeach ?>
                </div>
            </div> -->
            <div style="background-color:darkblue;"
      class="side-navbar  d-flex justify-content-between flex-wrap flex-column"
      id="sidebar"
    >
      <ul class="nav flex-column text-white w-100">
        <div style="width:100%;background-color:whitesmoke">
        <a href="<?=PATH?>" class="nav-link h3 text-white my-2">
        <span style="color:#014990;font-weight:bold;font-size:21px">Around </span><span style="color:#C41230;font-weight:bold;font-size:21px">it</span>
        </a>
        </div>
        <?php foreach($category as $row): ?>
        <a href="<?=PATH?>home/categoryselect/<?=$row['id']?>" class="nav-link">
         
          <span style="color:white;font-size:30px" class="mx-2"><?=$row["name_$lang"]?></span>
        </a>
       
        <?php endforeach?>
        <a href="<?=PATH?>home/ourteam" class="nav-link">
         
          <span style="color:white;font-size:30px" class="mx-2">Our Team</span>
        </a>
      </ul>

      
    </div>
            <!-- Page content wrapper-->
            
                <!-- Top navigation-->
                <div class="my-container">
                <header class="header" style="background-color:#F4F4F4 ;width:100%">
               
                    <div class="container-fluid" style="margin: 0;padding:0">
                    <div class="d-flex flex-row">
                    <a class="btn" id="menu-btns"  style="background-color: blue;">
                      <div class="p-2 bd-highlight" style="margin-top: 5px" > 
                      <!-- <button class="btn btn-primary" id="sidebarToggle"><i class="fa-solid fa-bars fa-lg"></i></button> -->
                      <img src="<?=PATH?>icons/bar.png" style="height:30px;width:33px;background-size:100% 100%;margin:0">
                    <span style="color:white;font-weight:bold"> Menu</span>
                    </div>
                    </a>
                    
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
                
           