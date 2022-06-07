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
          <?php if($data['info'] ==null): ?>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           add story 
           </button>
           <?php endif ?>
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
        <form method="post" enctype="multipart/form-data" action="<?=PATH?>adminabout/insertinfo">
        
  <div class="mb-3">
  <label  class="form-label">story_ar</label>
    <textarea  required name="story_ar" class="form-control" > </textarea>
  </div>
  <div class="mb-3">
  <label  class="form-label">story_en</label>
    <textarea  required name="story_en" class="form-control" > </textarea>
  </div>
  <div class="mb-3">
  <label  class="form-label">story_fr</label>
    <textarea  required name="story_fr" class="form-control" > </textarea>
  </div>
  <div class="mb-3">
  <label  class="form-label">story_ru</label>
    <textarea  required name="story_ru" class="form-control" > </textarea>
  </div>
  <div class="mb-3">
  <label  class="form-label">story_tr</label>
    <textarea  required name="story_tr" class="form-control" > </textarea>
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
       <?php if($data['info'] !=null): ?>
     <div class="card" style="width: 50rem;">
  <div class="card-header" style="float: left;">
  
  <button type="button" class="btn btn-primary" data-toggle="modal" style="width:5rem;float:right;margin-left:5px" data-target="#o<?=$data['info']["id"]?>">
 update
</button>
<a href="<?=PATH?>adminabout/deleteinfo/<?=$data['info']["id"]?>" class="btn btn-primary" style="width:3rem;float:right;background-color:red;margin-left:5px">X</a>
   <h4> post card </h4>
   
  <?php  ?>
  </div>
  <div class="card-body">
  <h5 >story:<br> <span style="margin-left:10px;color:dimgray;font-size:30px"> <?=$data['info']["story_$lang"]?></span></h5>
    
  <!--modal start -->

  <div class="modal fade" id="o<?=$data['info']["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit story</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"  action="<?=PATH?>adminabout/updateinfo/<?=$data['info']["id"]?>">
        <div class="mb-3">
    <label  class="form-label">story_<?=$lang?></label>
    <textarea type="text" name="story_<?=$lang?>" class="form-control" ><?= $data['info']["story_$lang"] ?></textarea>
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
  <?php endif?>
  
</div>
     </div>
     
</div>
</div>

        <!-- /.row (main row) -->
     


<?php
include("includes/footer.php");
?>