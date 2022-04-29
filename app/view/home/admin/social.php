<?php
include("includes/header.php");
?>

  <!-- Content Wrapper. Contains page content -->
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
            <div class="row justify-content-center">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            add new social_link
           </button>
           </div>
              <!-- creat social modal   -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add social link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="social_insert">
        <div class="mb-3">
    <label  class="form-label">name</label>
    <input type="text" required name="name" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">link</label>
    <textarea  required name="link" class="form-control" > </textarea>
  </div>
  <div class="mb-3">
  <label  class="form-label">icon from <a target="_blank" href="https://fontawesome.com/icons">here</a></label>
    <input type="text" required name="icon" class="form-control" >
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
<?php foreach($data as $row): ?>
 
<div class="row justify-content-center" >
    <div class="card" style="width: 50rem;">
  <div class="card-header" style="float: left;">
  
  
  <button type="button" class="btn btn-primary" data-toggle="modal" style="width:5rem;float:right;margin-left:5px" data-target="#o<?=$row['id']?>">
 update
</button>
   <a href="<?=PATH?>admin/social_delete/<?=$row['id']?>" class="btn btn-primary" style="width:3rem;float:right;background-color:red;margin-left:5px">X</a>
   <h4> social card </h4>
   
  <?php  ?>
  </div>
  <div class="card-body">
  <h5 >name: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $row["name"]?></span></h5>
   <h5 >icon: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $row["icon"]?><span></h5>
   <h5 >link: <span style="margin-left:10px;color:dimgray;font-size:30px"><?= $row["link"]?><span></h5>
   
   
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
        <form method="post"  action="social_update/<?=$row['id']?>">
        <div class="mb-3">
    <label  class="form-label">name</label>
    <input type="text" name="name" value="<?=$row["name"]?>" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">link</label>
    <input type="text" name="link" value="<?=$row["link"]?>" class="form-control" >
  </div>
  <div class="mb-3">

  <div class="mb-3">
  <label  class="form-label">icon</label>
    <input type="text" name="icon" value="<?=htmlspecialchars($row["icon"])?>"  class="form-control" >
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
            </div>
          </div>
            
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php
include("includes/footer.php");

?>