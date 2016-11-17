<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h2 align="center">Edit Member Type</h2> 
        <hr>
      </div>
    </div>              
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-info">
          <div class="panel-heading">Edit Member Type</div>
          <div class="panel-body">
            <form action="<?=base_url()?>admin/updateType" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$data['id_member_type']?>">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?=$data['name']?>">
              </div>
              <label>Fee</label>
              <div class="form-group input-group">
                <span class="input-group-addon">Rp. </span>
                <input type="text" name="fee" class="form-control" value="<?=$data['fee']?>">
              </div>
              <hr>
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="<?=base_url()?>admin/type"><button type="button" class="btn">Cancel</button></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>