<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h2 align="center">Edit Event</h2> 
        <hr>
      </div>
    </div>
    <div class="row">
     <div class="col-md-12">
      <form action="<?=base_url()?>admin/updateEvent" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$data['id_event']?>">
        <div class="form-group">
          <label>Name</label>
          <input class="form-control" name="name" value="<?=$data['name']?>" />
        </div>
        <div class="form-group">
          <label>Content</label>
          <textarea id="edit" name="content" cols="120" rows="20" class="form-control"><?=$data['content']?></textarea>
        </div>
        <div class="form-group col-md-6">
          <label>Start Date</label>
          <input class="form-control" name="start_date" value="<?=$data['start_date']?>"/>
        </div>
        <div class="form-group col-md-6">
          <label>End Date</label>
          <input class="form-control" name="end_date" value="<?=$data['end_date']?>"/>
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="fupload" class="form-control">
        </div>
        <div class="form-group">
          <label>Active</label>
          <div class="radio">
           <div class="radio">
             <label><input type="radio" name="active" value="1" <?=$data['status']==1 ?'checked' : ''?>>Yes</label>
           </div>
           <div class="radio">
            <label><input type="radio" name="active" value="0" <?=$data['status']==0 ?'checked' : ''?>>No</label>
          </div>
        </div>
        <div class="form-group">
          <label>Member Only</label>
          <div class="radio">
           <div class="radio">
             <label><input type="radio" name="member" value="1" <?=$data['is_member']==1 ?'checked' : ''?>>Yes</label>
           </div>
           <div class="radio">
            <label><input type="radio" name="member" value="0" <?=$data['is_member']==0 ?'checked' : ''?>>No</label>
          </div>
        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-primary">Save</button>
      <a href="<?=base_url()?>admin/event"><button type="button" class="btn">Cancel</button></a>
    </form>
  </div>
</div>
</div>
<!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>