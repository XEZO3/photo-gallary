<?php 

?>




<div class="row justify-content-center">
<?php foreach($data as $row): ?>

<div class="card" style="width: 18rem;">
<a href="/photoGalary/public/home/categoryselect/<?=$row['id']?>" style="text-decoration: none;color:black">
  <div class="card-body">
    <h5 class="card-title"><?=$row["name_$lang"]?></h5>
    <img src="/photogalary/public/images/<?=$row['icon']?>" alt="...">
    
    </div>
</a>
</div>

<?php endforeach ?>
</div>
<?php 
include("footer.php");
?>