<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Add Rates</h2> 
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="<?=base_url()?>admin/saveRates" method="POST" role="form">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name"/>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="price"/>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?=base_url()?>admin/rates"><button type="button" class="btn">Cancel</button></a>
                </form>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>