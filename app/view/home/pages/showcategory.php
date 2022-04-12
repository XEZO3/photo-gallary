<?php 

?>




<div class="row justify-content-center">
<?php foreach($data as $row): ?>

<div class="card" style="width: 18rem;">
<a href="/photoGalary/public/home/categoryselect/<?=$row['id']?>" style="text-decoration: none;color:black">
<img src="/photogalary/public/images/<?=$row['icon']?>" class="card-img-top" height="150px" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$row["name_$lang"]?></h5>
    
    
    </div>
</a>
</div>

<?php endforeach ?>
</div>
<?php 
include("footer.php");
?>