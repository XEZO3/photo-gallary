<?php 

?>
<style>

img{
  height: 250px;
  width: 250px;
  background-size: cover;
  object-fit: contain;
}
.card{
  margin-top: 10px;
}
.favorite_icon{
  width: 40px;
  height: 40px;
}




</style>

<div class="container" dir="<?=($lang == "ar") ?"rtl" : "ltr"?>">
  <div class="row justify-content-center">
  <?php if(!empty($data)): ?>
      <?php foreach($data as $row):
      ?>
        
   <div class="col-md-auto d-flex justify-content-center">
        <a href="<?=PATH?>home/postinfo/<?=$row['id'] ?>" style="text-decoration: none;color:black">
    <div class="card" style="width: 22rem;">
    <img  src="<?=PATH?>images/<?=$post->getmainimage($row['id'])?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?=$row["title_$lang"]?></h5>
   
    <a href="<?=PATH?>home/add_favorite/<?=$row['id']?>" class="aa"><img class="favorite_icon" src="<?=PATH?>icons/bookmark.png"></a>
  </div>
</div>
    </a> 
      </div>
    <?php endforeach?>
    <?php else:?>
     <h2 style="text-align: center;"><?=error[$lang]?></h2>
      <?php endif?>
    
    
  </div>
</div>

<?php 
include("footer.php");
?>