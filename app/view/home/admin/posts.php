<?php
include("includes/header.php");
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="container" >
<div class="row justify-content-center" style="margin: 10px;">

</div>
      <div class="row justify-content-center" >
      <select onchange="location = this.value">
      <option  default>--اختر القسم--</option>
      <option value="<?=PATH."adminpost/index/"?>" >All</option>
      <?php foreach($data as $row): ?>
        <option value="<?=PATH."adminpost/index/".$row['id']?>"><?=$row["name_$lang"]?></option>
        <?php endforeach ?>
    </select>
      </div> 
     <div class="container">
       <?php foreach($postdata as $row): ?>
       <div class="row justify-content-center">
     <div class="card" style="width: 50rem;">
  <div class="card-header" style="float: left;">
  
  <a href="<?=PATH?>adminpost/updatepage/<?=$row['id']?>" class="btn btn-primary"  style="width:5rem;float:right;margin-left:5px">
 update
       </a>
   <a href="<?=PATH?>adminpost/deletepost/<?=$row['id']?>" class="btn btn-primary" style="width:3rem;float:right;background-color:red;margin-left:5px">X</a>
   <h4> post card </h4>
   
  <?php  ?>
  </div>
  <div class="card-body">
  <h5 >title: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $row["title_$lang"]?></span></h5>
  <h5 >category name: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $category->getCategoryName($row['category_id'],$lang)?></span></h5>
   
  </div>
  
</div>
     </div>
     <?php endforeach ?>
</div>
</div>
</div>
        <!-- /.row (main row) -->
     


<?php
include("includes/footer.php");
?>