<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h2 align="center">Add News</h2> 
        <hr>
      </div>
    </div>
    <div class="row">
     <div class="col-md-12">
      <form action="<?=base_url()?>admin/saveNews" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
          <label>Title</label>
          <input class="form-control" name="title"/>
        </div>
        <div class="form-group">
          <label>Content</label>
          <textarea id="edit" name="content" cols="120" rows="20" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="fupload" class="form-control">
        </div>
        <div class="form-group">
          <label>Active</label>
          <div class="radio">
           <div class="radio">
             <label><input type="radio" name="active" value="1" checked>Yes</label>
           </div>
           <div class="radio">
            <label><input type="radio" name="active" value="0">No</label>
          </div>
        </div>
        <div class="form-group">
          <label>Member only</label>
          <div class="radio">
           <div class="radio">
             <label><input type="radio" name="member" value="1" checked>Yes</label>
           </div>
           <div class="radio">
            <label><input type="radio" name="member" value="0">No</label>
          </div>
        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-primary">Save</button>
      <a href="<?=base_url()?>admin/news"><button type="button" class="btn">Cancel</button></a>
    </form>
  </div>
</div>
</div>
<!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>