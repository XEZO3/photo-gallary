<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="fw-light text-white">Meet the Team</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row justify-content-center">
      <?php foreach($data['team'] as $row):?>
    <!-- Team Member 1 -->
    <div class="col-xl-4 col-md-5 mb-4">
      <div class="card border-0 shadow">
        <img src="<?=PATH?>images/<?=$row['image']?>" class="card-img-top" style="height:370px" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0"><?=$row['name']?></h5>
          <div class="card-text text-black-50"><?=$row['exp']?></div>
        </div>
      </div>
    </div>
    <?php endforeach?>
    <!-- Team Member 2 -->
    
    <!-- Team Member 3 -->
    
    <!-- Team Member 4 -->
  </div>
  <!-- /.row -->

</div>

<?php 

include("footer.php");

?>