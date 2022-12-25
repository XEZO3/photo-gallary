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
              <li class="breadcrumb-item"><a href="<?=PATH?>admin">Home</a></li>
              
              <li class="breadcrumb-item active"><a href="<?=PATH?>adminpost/index/<?=$data['parent_category']['id']?>"><?=$data['parent_category']["name_$lang"]?></a></li>
              <li class="breadcrumb-item"><a href="<?=PATH?>"><?php print_r($data['name']["title_$lang"])?></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="container">

  
  <form method="POST" enctype="multipart/form-data" action="<?=PATH?>adminpost/update/<?=$id?>">
    
<!-- end title -->
<div class="row row-cols-3">
    <div class="col">
      <div class="form-outline">     
    <input type="text" name="title_ar" required value="<?=$data['postData']['title_ar']?>" class="form-control">
    <label for="exampleInputEmail1" class="form-label">title_ar</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <input type="text" name="title_en" required value="<?=$data['postData']['title_en']?>" class="form-control">
    <label for="exampleInputEmail1" class="form-label">title_en</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <input type="text" name="title_fr" required value="<?=$data['postData']['title_fr']?>" class="form-control">
    <label for="exampleInputEmail1" class="form-label">title_fr</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <input type="text" name="title_ru" required value="<?=$data['postData']['title_ru']?>" class="form-control">
    <label for="exampleInputEmail1"  class="form-label">title_ru</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <input type="text" required value="<?=$data['postData']['title_tr']?>" name="title_tr" class="form-control">
    <label for="exampleInputEmail1"  class="form-label">title_tr</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <select required class="form-control" name="category_id">
      <option value="<?=$data['postData']['category_id']?>" default>--select category--</option>
        <?php foreach($data['categorydata'] as $row): ?>
          <option value="<?=$row['id']?>"><?= $row["name_$lang"] ?></option>
          <?php endforeach ?>
      </select>
      </div>
    </div>

    
  </div>
<!-- discreption  -->
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">discreption_ar</label>
    <textarea name="discreption_ar" required class="form-control" id="" ><?=$data['postData']['discribe_ar']?></textarea>
    
 
    <label for="exampleInputEmail1" class="form-label">discreption_en</label>
    <textarea name="discreption_en" required class="form-control" id="" ><?=$data['postData']['discribe_en']?></textarea>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">discreption_fr</label>
    <textarea name="discreption_fr" required class="form-control" id="" ><?=$data['postData']['discribe_fr']?></textarea>
    
  
    <label for="exampleInputEmail1" class="form-label">discreption_ru</label>
    <textarea name="discreption_ru" required class="form-control" id="" ><?=$data['postData']['discribe_ru']?></textarea>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">discreption_tr</label>
    <textarea name="discreption_tr" required class="form-control" id=""><?=$data['postData']['discribe_tr']?></textarea>
    <button type="submit" name="info" class="btn btn-primary">update the post</button>
</form>
<form method="POST" enctype="multipart/form-data" action="<?=PATH?>adminpost/update/<?=$id?>">   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">images</label>
    <input required type="file" name="images[]" multiple class="form-control" >
    
  </div>
<!-- end discreption  -->

  
  <br>
  <button type="submit" name="img" class="btn btn-primary">add image</button><br>
</form>
<div class="row justify-content-center">
<a href="<?=PATH?>adminpost/delete_all_img/<?=$id?>" class="btn btn-primary" style="background-color: red;">delete all</a>
</div>
<div class="row justify-content-center">

    <?php foreach($data['images'] as $img):?>
      
  <div class="card" style="width: 19rem;margin:15px">

<img src="/photogalary/public/images/<?=$img['image']?>" class="card-img-top" height="170px" alt="...">
<div class="card-body" > 
<a class="btn btn-primary" href="<?=PATH?>adminpost/deleteimage/<?=$img['id']?>" style="background-color: red;">delete</a>
<a class="btn btn-primary" href="<?=PATH?>public/images/<?=$img['image']?>" target="_blank">see the photo</a>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#o<?=$img['id']?>">update</button>
</div>
</div>
<div class="modal fade" id="o<?=$img['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update img</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?=PATH?>adminpost/updatesimg/<?=$img['id']?>">
        <div class="mb-3">
    <label  class="form-label">ar_name</label>
    <input type="file" required name="img" class="form-control" >
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
<?php endforeach?>
</div>
</div>
</div>
        <!-- /.row (main row) -->


<?php
include("includes/footer.php");
?>