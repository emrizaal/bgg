<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Add Facilities</h2> 
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="<?=base_url()?>admin/saveFacilities" method="POST" role="form">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="PLease Enter Facilities Name" />
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" cols="120" rows="20" class="form-control"></textarea>
                    </div>
                    
                    <hr>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?=base_url()?>admin/facilities"><button type="button" class="btn">Cancel</button></a>
                </form>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>