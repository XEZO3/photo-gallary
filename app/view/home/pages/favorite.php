<?php 

?>
<style>
.col{
  margin-top: 15px;
}
img{
  height: 250px;
  width: 250px;
  background-size: cover;
  object-fit: contain;
}
.favorite_icon{
 height: 20px;
 width: 20px;
}
.aa{
  text-decoration: none;
  color: black;
}
</style>

<div class="container">
  <div class="row justify-content-center">
  <?php if(!empty($data)): ?>
      <?php foreach($data as $row):
      foreach($favdata as $fav):
        if($fav == $row['id']):
      ?>
        
   <div class="col-md-4">
        <a href="<?=PATH?>home/postinfo/<?=$row['id'] ?>" style="text-decoration: none;color:black">
    <div class="card" style="width: 22rem;">
    <img src="<?=PATH?>images/<?=$post->getmainimage($row['id'])?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?=$row["title_$lang"]?></h5>
   
   
  </div>
</div>
    </a> 
      </div>
      <?php endif?>
    <?php endforeach?>
    <?php endforeach?>
    <?php else:?>
      <h2 style="text-align: center;">there is no favorite</h2>
      <?php endif?>
    
    
  </div>
</div>

<?php 
include("footer.php");
?>