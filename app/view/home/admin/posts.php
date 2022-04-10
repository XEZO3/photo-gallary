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
<form method="POST"  action="/task1mvc/public/adminpost/insert"  style="width: 30rem;">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input type="text" class="form-control"  name="title"  >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Text</label>
    <textarea name="text" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">category</label>
    <select name="category">
    <?php foreach($category as $row): ?>
      <option value="<?=$row->id?>">
      <?=$row->name?>
      </option>
      <?php endforeach ?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
      <div class="row justify-content-center" >
      <select onchange="location = this.value">
      <option  default>--اختر تصنيف--</option>
    <?php foreach($category as $row): ?>
      <option value="/task1mvc/public/adminpost/index/<?=$row->id?>">
      
      <?=$row->name?>
      
      </option>
      
      <?php endforeach ?>
    </select>
      </div> 
  <?php foreach($rows as $row):  ?>
    
  <div class="row justify-content-center" >
    <div class="card" style="width: 50rem;">
  <div class="card-header" style="float: left;">
   <h5 style="float: left;"> <?=$row->username?></h5>
   <a href="/task1mvc/public/adminpost/update/<?=$row->id?>" class="btn btn-primary" style="width:4rem;float:right;margin:5px">edit</a>

   <a href="/task1mvc/public/adminpost/delete/<?=$row->id?>" class="btn btn-primary" style="width:3rem;float:right;background-color:red;margin:5px">X</a>
  
  </div>
  
  <div class="card-body">
    <h5 class="card-title"><?=$row->title?></h5>
    <p class="card-text"><?=$row->text?></p>
    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>
           
          
        </div>
        <?php endforeach ?>
</div>
</div>
        <!-- /.row (main row) -->
     


<?php
include("footer.php");
?>