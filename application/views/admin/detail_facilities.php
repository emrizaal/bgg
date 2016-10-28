<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center"><?=$data['name']?></h2> 
                <hr>
            </div>
        </div>              
        <div class="row">
            <div class="col-md-12">
                <?=$data['content']?>
            </div>
        </div>
        <hr>
        <a href="<?=base_url()?>admin/facilities"><button class="btn btn-primary">Back</button></a>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>