<!doctype html>
<html lang="en">
  <head>
  <script src="https://kit.fontawesome.com/18cbec86c9.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
   </style>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


 
  </head>
  <body class="d-flex flex-column min-vh-100">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Around <span style="color: orange;">IT</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=PATH?>">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
         
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php foreach($category as $row): ?>
            
            <li><a class="dropdown-item" href="<?=PATH?>home/categoryselect/<?=$row['id']?>"><?=$row["name_$lang"]?></a></li>
            
            <?php endforeach ?>
          </ul>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            languages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?=PATH."/home/setlanguage/ar"?>">العربية</a></li>
            <li><a class="dropdown-item" href="<?=PATH."/home/setlanguage/en"?>">english</a></li>
            <li><a class="dropdown-item" href="<?=PATH."/home/setlanguage/fr"?>">france</a></li>
            <li><a class="dropdown-item" href="<?=PATH."/home/setlanguage/ru"?>">russian</a></li>
            <li><a class="dropdown-item" href="<?=PATH."/home/setlanguage/tr"?>">turkey</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
      <a class="nav-link" style="margin-right: 20px;" href="<?=PATH?>home/showfav"><i  class="fa-solid fa-bookmark fa-xl"></i></a>
      </li>
      
        </ul>
    
  </div>
</nav> -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
   
    <ul class="navbar-nav  ">
    <a class="navbar-brand" href="#">Around <span style="color: orange;">it</span></a>
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
     
    </ul>
  </div>
</nav>
<header class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid" >
<button class="navbar-toggler ms-auto"  type="button" data-bs-toggle="collapse" data-bs-target="#categorybar" aria-controls="categorybar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="categorybar">
<ul class="navbar-nav mx-auto">
  <li>hhh</li>
  <li>hhh</li>
  <li>hhh</li>
</ul>
</div>
</div>
</header>