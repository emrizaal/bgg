<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h2 align="center">Add Course</h2> 
        <hr>
      </div>
    </div>
    <div class="row">
     <div class="col-md-12">
      <form action="<?=base_url()?>admin/saveCourse" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="fupload" class="form-control">
        </div>
        <div class="form-group">
          <label>Name</label>
          <input class="form-control" name="name"/>
        </div>
        <div class="form-group">
          <label>Par</label>
          <input class="form-control" name="par"/>
        </div>
        <label>Distance (in yds)</label>
          <div class="form-group input-group col-md-1">
            <span class="input-group-addon"><img src="<?=base_url()?>assets/image/yard_black.png"></span><input class="form-control" name="black"/>
          </div>
          <div class="form-group input-group col-md-1">
            <span class="input-group-addon"><img src="<?=base_url()?>assets/image/yard_white.png"></span><input class="form-control" name="white"/>
          </div>
          <div class="form-group input-group col-md-1">
            <span class="input-group-addon"><img src="<?=base_url()?>assets/image/yard_blue.png"></span><input class="form-control" name="blue"/>
          </div>
          <div class="form-group input-group col-md-1">
            <span class="input-group-addon"><img src="<?=base_url()?>assets/image/yard_red.png"></span><input class="form-control" name="red"/>
          </div>
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea id="edit" name="description" cols="120" rows="20" class="form-control"></textarea>
      </div>
      <hr>
      <button type="submit" class="btn btn-primary">Save</button>
      <a href="<?=base_url()?>admin/course"><button type="button" class="btn">Cancel</button></a>
    </form>
  </div>
</div>
</div>
<!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>