<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


    <title>Hello, world!</title>
  </head>
  <body>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php foreach($category as $row): ?>
            <?php if($navbar->checkCategory($row['id'])>0): ?>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?=$row["name_$lang"]?>
          </a>
          <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdownMenuLink">
              <?php foreach($navbar->getSubCategory($row['id']) as $rows): ?>
                <li><a class="dropdown-item" href="#"><?=$rows["name_$lang"]?></a></li>
                <?php endforeach ?>
          </ul>
        </li>
              <?php else: ?>
            <li><a class="dropdown-item" href="#"><?=$row["name_$lang"]?></a></li>
            <?php endif ?>
            <?php endforeach ?>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            languages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?=PATH."/home/setlanguage/ar"?>">arabic</a></li>
            <li><a class="dropdown-item" href="<?=PATH."/home/setlanguage/en"?>">english</a></li>
            <li><a class="dropdown-item" href="<?=PATH."/home/setlanguage/fr"?>">france</a></li>
            <li><a class="dropdown-item" href="<?=PATH."/home/setlanguage/ru"?>">russian</a></li>
            <li><a class="dropdown-item" href="<?=PATH."/home/setlanguage/tr"?>">turkey</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>