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

</style>
<div style="margin-left: 30px;">
<a style="font-size: 25px;margin-left: 2px;text-decoration:none;color:black" href="<?=PATH?>">home</a>>
<?php 
foreach($prev as $p):
?>
<a style="font-size: 25px;margin-left: 2px;text-decoration:none;color:black" href="<?=PATH?>home/categoryselect/<?=$p['id']?>"><?=$p["name_$lang"]?></a>>

<?php 
endforeach
?>
</div>
<div class="container" dir="<?=($lang == "ar") ?"rtl" : "ltr"?>">
<div class="row justify-content-center" >

  <?php if(!empty($data)): ?>
<?php foreach($data as $row): ?>

  
<!-- <div class="col-md-auto d-flex justify-content-center">
        <a href="<?=PATH?>home/categoryselect/<?=$row['id']?>" style="text-decoration: none;color:black">
    <div class="card" style="width: 20rem;">
    <img src="<?=PATH?>images/<?=$row['icon']?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?=$row["name_$lang"]?></h5>
   
   
  </div>
</div>
    </a> 
      </div> -->
      <div class="col-md-auto d-flex justify-content-center">
    <div class="card" style="width: 22rem;">
    <a href="<?=PATH?>home/categoryselect/<?=$row['id']?>" style="text-decoration: none;color:black">
    <img  src="<?=PATH?>images/<?=$row['icon']?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?=$row["name_$lang"]?></h5>
   
   
  </div> 
</a> 
</div>
   
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