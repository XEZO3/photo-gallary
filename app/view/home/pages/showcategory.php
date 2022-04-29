<?php 

?>

<style>
.row{
  width: 100%;
}
.card{
  margin-top: 15px;
  margin-left: 60px;
}
img{
  height: 250px;
  width: 250px;
  background-size: cover;
  object-fit: contain;
}

</style>

<div class="container" dir="<?=($lang == "ar") ?"rtl" : "ltr"?>">
<div class="row justify-content-center" style="width: 100%;">
  <?php if(!empty($data)): ?>
<?php foreach($data as $row): ?>

  
<div class="col">
        <a href="<?=PATH?>home/categoryselect/<?=$row['id']?>" style="text-decoration: none;color:black">
    <div class="card" style="width: 20rem;">
    <img src="<?=PATH?>images/<?=$row['icon']?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?=$row["name_$lang"]?></h5>
   
   
  </div>
</div>
    </a> 
      </div>
<?php endforeach ?>
<?php else: ?>
  <h2><?=error[$lang]?></h2>
  <?php endif ?>
</div>
</div>
<?php 
include("footer.php");
?>