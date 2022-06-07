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
          
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           add news 
           </button>
          
             <!-- creat social modal   -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add story</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?=PATH?>adminnews/insert_news">
        
  <div class="mb-3">
  <label  class="form-label">title ar</label>
    <input  required name="title_ar" class="form-control" > 
  </div>
  <div class="mb-3">
  <label  class="form-label">title en</label>
    <input  required name="title_en" class="form-control" > 
  </div>
  <div class="mb-3">
  <label  class="form-label">title fr</label>
    <input  required name="title_fr" class="form-control" > 
  </div>
  <div class="mb-3">
  <label  class="form-label">title ru</label>
    <input  required name="title_ru" class="form-control" > 
  </div>
  <div class="mb-3">
  <label  class="form-label">title tr</label>
    <input  required name="title_tr" class="form-control" >
  </div>
  
  <div class="mb-3">
  <label  class="form-label">image</label>
  <input type="file" name="image" class="form-control">
  </div>
  <div class="mb-3">
  <label  class="form-label">category</label>
  <select required class="form-control" name="category_id">
      <option value="" default>--select category--</option>
        <?php foreach($data['category'] as $row): ?>
          <option value="<?=$row['id']?>"><?= $row["name_$lang"] ?></option>
          <?php endforeach ?>
      </select>
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
  
<!-- end create social model -->
      </div> 
     <div class="container">
      
        
       <div class="row justify-content-center">
       <?php foreach($data['news'] as $row): ?>
     <div class="card" style="width: 50rem;">
  <div class="card-header" style="float: left;">
  
  <button type="button" class="btn btn-primary" data-toggle="modal" style="width:5rem;float:right;margin-left:5px" data-target="#o<?=$row["id"]?>">
 update
</button>
<a href="<?=PATH?>adminnews/delete_news/<?=$row["id"]?>" class="btn btn-primary" style="width:3rem;float:right;background-color:red;margin-left:5px">X</a>
   <h4> post card </h4>
   
  <?php  ?>
  </div>
  <div class="card-body">
  <h5 >title ar<br> <span style="margin-left:10px;color:dimgray;font-size:30px"> <?=$row["title_ar"]?></span></h5>
  <h5 >title en<br> <span style="margin-left:10px;color:dimgray;font-size:30px"> <?=$row["title_en"]?></span></h5>
  <h5 >title fr<br> <span style="margin-left:10px;color:dimgray;font-size:30px"> <?=$row["title_fr"]?></span></h5>
  <h5 >title ru<br> <span style="margin-left:10px;color:dimgray;font-size:30px"> <?=$row["title_ru"]?></span></h5>
  <h5 >title tr<br> <span style="margin-left:10px;color:dimgray;font-size:30px"> <?=$row["title_tr"]?></span></h5>
  <h5 >category name:<br> <span style="margin-left:10px;color:black;font-size:30px"> <?=$data['main']->getCategoryName($row["categoryid"],$lang)?></span></h5>
  <br>
  <img src="<?=PATH?>images/<?=$row['image']?>"  style="max-width:100px;max-height:100px">
    
  <!--modal start -->

  <div class="modal fade" id="o<?=$row["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit story</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data"  action="<?=PATH?>adminnews/update_news/<?=$row["id"]?>">
        <div class="mb-3">
    <label  class="form-label">title ar</label>
    <textarea type="text" name="title_ar" class="form-control" ><?= $row["title_ar"] ?></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">title en</label>
    <textarea type="text" name="title_en" class="form-control" ><?= $row["title_en"] ?></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">title fr</label>
    <textarea type="text" name="title_fr" class="form-control" ><?= $row["title_fr"] ?></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">title ru</label>
    <textarea type="text" name="title_ru" class="form-control" ><?= $row["title_ru"] ?></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">title tr</label>
    <textarea type="text" name="title_tr" class="form-control" ><?= $row["title_tr"] ?></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">image</label>
    <input type="file" name="image" class="form-control">
  </div> 
  <div class="mb-3">
  <label  class="form-label">category</label>
  <select  class="form-control" name="category_id">
      <option value="" default>--select category--</option>
        <?php foreach($data['category'] as $row): ?>
          <option value="<?=$row['id']?>"><?= $row["name_$lang"] ?></option>
          <?php endforeach ?>
      </select>
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
  </div>

  <!--end modal -->
  </div>
  <?php endforeach?>
  
</div>
     </div>
     
</div>
</div>

        <!-- /.row (main row) -->
     


<?php
include("includes/footer.php");
?>