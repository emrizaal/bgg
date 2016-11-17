<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center"><?=$data['name']?></h2> 
                <center><?=$data['par']?>
                <hr>
                <img src="<?=base_url()?>assets/image/yard_black.png"> <?=$data['black']?> yds |
                <img src="<?=base_url()?>assets/image/yard_white.png"> <?=$data['white']?> yds |
                <img src="<?=base_url()?>assets/image/yard_blue.png"> <?=$data['blue']?> yds | 
                <img src="<?=base_url()?>assets/image/yard_red.png"> <?=$data['red']?> yds
                </center>
                <hr>
            </div>
        </div>              
        <div class="row">
            <div class="col-md-12" align="center">
                <img src="<?=base_url()?>admin_assets/img/<?=$data['image']?>">
            </div>
            <div class="col-md-12">
                <?=$data['description']?>
            </div>
        </div>
        <hr>
        <a href="<?=base_url()?>admin/course"><button class="btn btn-primary">Back</button></a>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>