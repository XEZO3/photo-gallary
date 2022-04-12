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

<div class="container">

  
  <form method="POST" enctype="multipart/form-data" action="<?=PATH?>adminpost/insert">
    
<!-- end title -->
<div class="row row-cols-3">
    <div class="col">
      <div class="form-outline">     
    <input type="text" name="title_ar" class="form-control">
    <label for="exampleInputEmail1" class="form-label">title_ar</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <input type="text" name="title_en" class="form-control">
    <label for="exampleInputEmail1" class="form-label">title_en</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <input type="text" name="title_fr" class="form-control">
    <label for="exampleInputEmail1" class="form-label">title_fr</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <input type="text" name="title_ru" class="form-control">
    <label for="exampleInputEmail1" class="form-label">title_ru</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <input type="text" name="title_tr" class="form-control">
    <label for="exampleInputEmail1" class="form-label">title_tr</label>
      </div>
    </div>

    
  </div>
<!-- discreption  -->
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">discreption_ar</label>
    <textarea name="discreption_ar" class="form-control" id="" ></textarea>
    
 
    <label for="exampleInputEmail1" class="form-label">discreption_en</label>
    <textarea name="discreption_en" class="form-control" id="" ></textarea>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">discreption_fr</label>
    <textarea name="discreption_fr" class="form-control" id="" ></textarea>
    
  
    <label for="exampleInputEmail1" class="form-label">discreption_ru</label>
    <textarea name="discreption_ru" class="form-control" id="" ></textarea>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">discreption_tr</label>
    <textarea name="discreption_tr" class="form-control" id=""></textarea>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">images</label>
    <input type="file" name="images[]" multiple class="form-control" >
    
  </div>
<!-- end discreption  -->

  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 

</div>
</div>
        <!-- /.row (main row) -->


<?php
include("includes/footer.php");
?>