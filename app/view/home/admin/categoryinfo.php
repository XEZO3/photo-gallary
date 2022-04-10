<?php

include("header.php");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=$name?></h1>
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
<div class="row justify-content-center" >
<button type="button" class="btn btn-primary" data-toggle="modal" style="width:5rem;float:right;margin-left:5px" data-target="#addcategory">add</button>


  <!-- add category modal -->
  <div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="/photogalary/public/admincategory/insert/">
        <div class="mb-3">
    <label  class="form-label">ar_name</label>
    <input type="text" name="name_ar" value="" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">en_name</label>
    <input type="text" name="name_en" value="" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">fr_name</label>
    <input type="text" name="name_fr" value="" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">ru_name</label>
    <input type="text" name="name_ru" value="" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">tr_name</label>
    <input type="text" name="name_tr" value="" class="form-control" >
    <input type="hidden" name="parent_id" value="<?=$id?>">
    
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
 <!-- add category modal -->
</div>
<?php foreach($info as $row): ?>
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
        <form method="post" action="update/<?=$row['id']?>">
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
<?php endforeach ?>
  <!--end modal -->
</div>     
</div>







<?php
include("footer.php");

?>