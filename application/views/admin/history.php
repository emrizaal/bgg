<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">History</h2> 
                <hr>
            </div>
        </div>              
        <div class="row" align="center">
            <div class="col-md-12">
                <form action="<?=base_url()?>admin/saveHistory" method="POST">
                    <textarea name="content" cols="120" rows="20"><?=$data['content']?></textarea>
                    <hr>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>