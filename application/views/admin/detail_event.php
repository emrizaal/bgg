<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center"><?=$data['name']?></h2> 
                <center><?=$data['start_date']?> until <?=$data['end_date']?></center>
                <hr>
            </div>
        </div>              
        <div class="row">
            <div class="col-md-12">
                <img src="<?=base_url()?>admin_assets/img/<?=$data['image']?>">
            </div>
            <div class="col-md-12">
                <?=$data['content']?>
            </div>
        </div>
        <hr>
        <a href="<?=base_url()?>admin/event"><button class="btn btn-primary">Back</button></a>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>