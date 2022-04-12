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
              <?php foreach($url as $path): ?>
              <li class="breadcrumb-item"><a href="<?=PATH.$path?>"><?=$path?></a></li>
              
              <?php endforeach ?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<div class="container" >
<div class="row justify-content-center" >
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 add new category
</button>
<!-- creat category modal   -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="insert">
        <div class="mb-3">
    <label  class="form-label">ar_name</label>
    <input type="text" name="name_ar" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">en_name</label>
    <input type="text" name="name_en" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">fr_name</label>
    <input type="text" name="name_fr" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">ru_name</label>
    <input type="text" name="name_ru" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">tr_name</label>
    <input type="text" name="name_tr" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">icon</label>
    <input type="file" name="uploadfile"  class="form-control" >
  </div>
  <select name="parent_id" required >
  <option value="0" selected="selected">parent category</option>
      
  </select>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- end creat category modal   -->


</div>
<br>
<?php foreach($rows as $row): ?>
  <?php if($row["parent_id"] == 0):  ?>
<div class="row justify-content-center" >
    <div class="card" style="width: 50rem;">
  <div class="card-header" style="float: left;">
  
  <a href="/photoGalary/public/admincategory/categoryinfo/<?=$row['id']?>" class="btn btn-primary" style="width:5rem;float:right;background-color:gray;margin-left:5px">more</a>
  <button type="button" class="btn btn-primary" data-toggle="modal" style="width:5rem;float:right;margin-left:5px" data-target="#o<?=$row['id']?>">
 update
</button>
   <a href="/photoGalary/public/admincategory/delete/<?=$row['id']?>" class="btn btn-primary" style="width:3rem;float:right;background-color:red;margin-left:5px">X</a>
   <h4> category card </h4>
   
  <?php  ?>
  </div>
  <div class="card-body">
  <h5 >ARABIC: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $row["name_ar"]?></span></h5>
   <h5 >ENGLISH: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $row["name_en"]?><span></h5>
   <h5 >FRANCE: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $row["name_fr"]?><span></h5>
   <h5 >Russian: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $row["name_ru"]?><span></h5>
   <h5 >TURKISH: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $row["name_tr"]?><span></h5>
   <img src="<?=PATH?>images/<?=$row['icon']?>"  style="max-width:100px;max-height:100px" />
  </div>
  <!--modal start -->

  <div class="modal fade" id="o<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="update/<?=$row['id']?>">
        <div class="mb-3">
    <label  class="form-label">ar_name</label>
    <input type="text" name="name_ar" value="<?=$row["name_ar"]?>" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">en_name</label>
    <input type="text" name="name_en" value="<?=$row["name_en"]?>" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">fr_name</label>
    <input type="text" name="name_fr" value="<?=$row["name_fr"]?>" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">ru_name</label>
    <input type="text" name="name_ru" value="<?=$row["name_ru"]?>" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">tr_name</label>
    <input type="text" name="name_tr" value="<?=$row["name_tr"]?>" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">icon</label>
    <input type="file" name="uploadfile"  class="form-control" >
  </div>
  
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

  <!--end modal -->
</div>     
</div>
<?php endif ?>
 <?php endforeach ?> 
</div>

</div>


<?php
include("includes/footer.php");

?>