
<style>
.d-block{
  width: 100%;
  height: 500px;
  
  object-fit:contain;

}
</style>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <?php for($i=1;$i<count($images);$i++): ?>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?=$i?>"></button>
    <?php endfor ?>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
  
    <?php 
    $active = true;
    foreach($images as $row):
    ?>
       
    <div class="carousel-item <?=($active==true)?"active":""?>">
      <img src="<?=PATH?>images/<?=$row['image']?>"   class="d-block w-100" >
      <div class="carousel-caption">
        
      </div> 
    </div>
    <?php $active=false?>
    <?php endforeach?>
    
    
    
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3" dir="<?=($lang == "ar") ?"rtl" : "ltr"?>">
  <h3><?=$postinfo["title_$lang"]?></h3>
  <p><?=$postinfo["discribe_$lang"]?></p>
</div>


<?php
include("footer.php");
?>