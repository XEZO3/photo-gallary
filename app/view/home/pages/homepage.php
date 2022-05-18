<style>
  .container{
    text-align: center;
    
  }
  .carousel-inner,.carousel-item{
    max-height: 500px;
    background-size: cover;
    width: 100%;
  }
  .on-slid{
    position:absolute;
    top:50%;
    left: 50%;
  transform: translate(-50%, -50%);
  width:400px;
  height:300px;
  border-radius: 10px;
  background-color: rgba(16, 36, 78, 0.7);

 
  }
</style>
<div class="container-fulid">
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <?php for($i=1;$i<count($data);$i++): ?>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?=$i?>"></button>
    <?php endfor ?>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
  
    <?php 
    $active = true;
    foreach($data as $row):
    ?>
       
    <div class="carousel-item <?=($active==true)?"active":""?>" style="position:relative">
      <img src="<?=$row['pic']?>"   class="d-block" style="width:100%" >
      <div class="on-slid" >
      <?=$row['pic']?>
      </div>
      <div class="carousel-caption" >
        
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
sss
</div>


<?php
include("footer.php");
?>
