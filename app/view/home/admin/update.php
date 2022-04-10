<?php

include("header.php");
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

<form method="POST"  action="/task1mvc/public/adminpost/postUpdate/<?=$id[0]?>"  style="width: 30rem;">
<?php 

  
  
   ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input type="text" class="form-control" value="<?=$rows->title?>" name="title"  >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Text</label>
    <textarea name="text" class="form-control"><?=$rows->text?></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">category</label>
    
  </div>
  <select name="category">
    <?php foreach($category as $row): ?>
      <option value="<?=$row->id?>">
      <?=$row->name?>
      </option>
      <?php endforeach ?>
    </select>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>   
  
</div>
</div>

<?php
include("footer.php");

?>