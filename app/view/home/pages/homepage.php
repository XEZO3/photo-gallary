
    <!-- custom css -->

    <style>
      .container{
   margin-top: 10px;
   margin-bottom: 10px;
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
  background-color: rgba(16, 36, 78, 0.8);
  }
  .sb{
    background-color:#DEDEDE;
   
    border-radius:10px;
    font-weight: bold;
    font-size: 25px;
  }
  .cards{
    width: 18rem;
    margin-top: 30px;
  }

  
 
  /* .cards-img{
    width: 350px;
    height: 350px;
    object-fit:cover;
    border: 1px ridge;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);;
  } */
  /* .cards-img > img{
    height: 100%;
    width: 100%;
  } */
  .card{
  margin-top: 10px;
}
.favorite_icon{
  width: 40px;
  height: 40px;
}
    </style>
  
    <!-- Side-Nav -->
    

    <!-- Main Wrapper -->
    
      <!-- Top Nav -->
     
      <div class="container-fulid">
  <?php if(!empty($data)): ?>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <?php for($i=1;$i<count($data['news']);$i++): ?>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?=$i?>"></button>
    <?php endfor ?>
  </div>
  
  <!-- The slideshow/carousel -->
   <div class="carousel-inner">
  
    <?php 
    $active = true;
    foreach($data['news'] as $row):
    ?>
       
    <div class="carousel-item <?=($active==true)?"active":'';?>" >
      <img src="<?=PATH?>images/<?=$row['image'];?>"   class="d-block" style="width:100%;max-height:500px" >
      <div class="on-slid">
        <div class="d-flex flex-column text-center" style="margin-top: 20%">
      <p style="color:white;font-size:18px" class="p-2 bd-highlight"><?=$row["title_$lang"];?></p>
      
      <div class=" p-2 bd-highlight"><a href="<?=PATH;?>home/categoryselect/<?=$row['category_id'];?>" style="color:white;background-color:red" class="btn">Shop Now</a></div>
      </div>
      </div>
       
    </div>
    <?php $active = false; ?>
    <?php endforeach; ?>
    
    
    
  </div>

  
  <!-- Left and right controls/icons -->
   <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<?php endif; ?>
</div>
<div class="container" dir="<?=($lang == "ar") ?"rtl" : "ltr";?>">
<div class="row justify-content-center sb"><?=titleC[$lang]?></div>
<div class="row justify-content-center">
<?php foreach($data['category'] as $row): ?>
<div class="col-md-auto d-flex justify-content-center">
  <div class="card " style="border: none;width: 22rem;">
  <a href="<?=PATH?>home/categoryselect/<?=$row['id']?>" style="text-decoration:none;color:black">
    <img src="<?=PATH?>images/<?=$row['icon']?>" class="card-img-top" style="height:250px">
    
    <div class="card-title text-center">
      <h3><?=$row["name_$lang"]?></h3>
    </div>
    </a>
  </div>
</div>
<?php endforeach; ?>
</div>
</div>
<div class="container" style="margin-top: 100px;" dir="<?=($lang == "ar") ?"rtl" : "ltr";?>">
<div class="row justify-content-center sb"><?=titleL[$lang]?></div>
<div class="row justify-content-center" >
<?php foreach($data['lastUpdate'] as $row): ?>
<div class="col-md-auto d-flex justify-content-center">
<div class="card" style="width: 22rem;">
<a href="<?=PATH?>home/categoryselect/<?=$row['id']?>" style="text-decoration:none;color:black">
    <img  src="<?=PATH?>images/<?=$data['post']->getmainimage($row['id'])?>" class="card-img-top"  style="height:250px" >
  <div class="card-body">
    <h5 class="card-title"><?=$row["title_$lang"]?></h5>
   
    <a  href="<?=PATH?>home/add_favorite/<?=$row['id']?>" class="me-auto"><img class="favorite_icon" src="<?=PATH?>icons/bookmark.png"></a>
  </div>
</a>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
<div class="container" style="margin-top: 100px;" dir="<?=($lang == "ar") ?"rtl" : "ltr";?>">
<div class="row justify-content-center sb"><?=titleS[$lang]?></div>
<div class="row justify-content-center" >

<p  class="text-center" style="font-size: 25px;"><?=@$data["about"]["story_$lang"]?></p>

</div>
</div>

    

    <!-- bootstrap js -->
    
    <!-- custom js -->
   
    
<?php
include("footer.php");
?>
 
