<?php 

?>
<style>

/* .img{
  height: 250px;
  width: 250px;
  background-size: cover;
  object-fit: contain;
} */
.card{
  margin-top: 10px;
}
.favorite_icon{
  width: 30px;
  height: 30px;
}




</style>
<div style="margin-left: 30px;margin-right:30px" dir="<?=($lang == "ar") ?"rtl" : "ltr"?>">
<a style="font-size: 20px;margin-left: 2px;text-decoration:none;color:black" href="<?=PATH?>"><?=HomePage[$lang]?></a>
<?php 
foreach($prev as $p):
?>
->
<a style="font-size: 20px;margin-left: 2px;text-decoration:none;color:black" href="<?=PATH?>home/categoryselect/<?=$p['id']?>"><?=$p["name_$lang"]?></a>

<?php 
endforeach
?>
</div>
<div class="container" dir="<?=($lang == "ar") ?"rtl" : "ltr"?>">
  <div class="row justify-content-center">
  <?php if(!empty($data)): ?>
      <?php foreach($data as $row):
      ?>
        
   <div class="col-md-auto d-flex justify-content-center">
        <a href="<?=PATH?>posts/postinfo/<?=$row['id'] ?>" style="text-decoration: none;color:black">
    <div class="card" style="width: 20rem;">
    <img  src="<?=PATH?>images/<?=$post->getmainimage($row['id'])?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?=$row["title_$lang"]?></h5>
   
    <a href="<?=PATH?>home/add_favorite/<?=$row['id']?>" class="aa"><img class="favorite_icon" src="<?=PATH?>icons/bookmark.webp"></a>
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