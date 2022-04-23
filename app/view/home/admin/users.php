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
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<div class="container" >
    <div class="row justify-content-center">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 add user
</button>
    </div>
<div class="row justify-content-center" >

<!-- creat admin modal   -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="adduser">
        <div class="mb-3">
    <label  class="form-label">username</label>
    <input type="text" name="username" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">password</label>
    <input type="text" name="password" class="form-control" >
  </div>
  
 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- end creat admin modal   -->


</div>
<br>
<?php foreach($data as $row): ?>
  <?php if($row['permession'] !=100) : ?>
<div class="row justify-content-center" >
    <div class="card" style="width: 50rem;">
  <div class="card-header" style="float: left;">
  
  
  <button type="button" class="btn btn-primary" data-toggle="modal" style="width:5rem;float:right;margin-left:5px" data-target="#o<?=$row['id']?>">
 update
</button>
   <a href="<?=PATH?>admin/deleteuser/<?=$row['id']?>" class="btn btn-primary" style="width:3rem;float:right;background-color:red;margin-left:5px">X</a>
   <h4> user card </h4>
   
  <?php  ?>
  </div>
  <div class="card-body">
  <h5 >name: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $row["username"]?></span></h5>
   
  
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
        <form method="post" enctype="multipart/form-data" action="updateuser/<?=$row['id']?>">
        <div class="mb-3">
    <label  class="form-label">username</label>
    <input type="text" name="username" value="<?=$row["username"]?>" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">password</label>
    <input type="text" name="password"  class="form-control" >
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