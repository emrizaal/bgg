<?php 
$this->load->view("member/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center"><?=$data['judul_berita']?></h2> 
                <center><?=$data['tanggal_berita']?></center>
                <hr>
            </div>
        </div>              
        <div class="row">
            <div class="col-md-12">
                <img src="<?=base_url()?>admin_assets/img/<?=$data['image']?>">
            </div>
            <div class="col-md-12">
                <?=$data['isi_berita']?>
            </div>
        </div>
        <hr>
        <a href="<?=base_url()?>member/news"><button class="btn btn-primary">Back</button></a>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('member/footer');
?>