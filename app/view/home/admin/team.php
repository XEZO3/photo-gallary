





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
           add team member
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
        <form method="post" enctype="multipart/form-data" action="<?=PATH?>adminabout/insert_team">
        
  <div class="mb-3">
  <label  class="form-label">name</label>
    <textarea  required name="name" class="form-control" > </textarea>
  </div>
  <div class="mb-3">
  <label  class="form-label">exp</label>
    <textarea  required name="exp" class="form-control" > </textarea>
  </div>
  <div class="mb-3">
  <label  class="form-label">image</label>
  <input type="file" require name="image" class="form-control">
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
       <?php foreach($data['team'] as $row): ?>
     <div class="card" style="width: 50rem;">
  <div class="card-header" style="float: left;">
  
  <button type="button" class="btn btn-primary" data-toggle="modal" style="width:5rem;float:right;margin-left:5px" data-target="#o<?=$row["id"]?>">
 update
</button>
<a href="<?=PATH?>adminabout/delete_team/<?=$row["id"]?>" class="btn btn-primary" style="width:3rem;float:right;background-color:red;margin-left:5px">X</a>
   <h4> post card </h4>
   
  <?php  ?>
  </div>
  <div class="card-body">
  <h5 >name<br> <span style="margin-left:10px;color:dimgray;font-size:30px"> <?=$row["name"]?></span></h5>
  <h5 >exp<br> <span style="margin-left:10px;color:dimgray;font-size:30px"> <?=$row["exp"]?></span></h5>
  
  <br>
  <img src="<?=PATH?>images/<?=$row['image']?>"  style="max-width:100px;max-height:100px">
    
  <!--modal start -->

  <div class="modal fade" id="o<?=$row["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit team member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data"  action="<?=PATH?>adminabout/update_team/<?=$row["id"]?>">
        <div class="mb-3">
    <label  class="form-label">name</label>
    <textarea type="text" name="name" class="form-control" ><?= $row["name"] ?></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">exp</label>
    <textarea type="text" name="exp" class="form-control" ><?= $row["exp"] ?></textarea>
  </div>
  
  
    <label  class="form-label">image</label>
    <input type="file" name="image" class="form-control">
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
  <?php endforeach ?>
  </div>
     </div>
     
</div>
</div>

        <!-- /.row (main row) -->
     


<?php
include("includes/footer.php");
?>





























































