<?php 
$this->load->view("member/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">News</h2> 
                <hr>
            </div>
        </div>              
        <div class="row">
            <div class="col-md-12">
                <div class="list-group" style="width: 60%;margin-left: 20%;">
                    <?php
                    foreach($data as $d){
                        ?>
                    <a href="<?=base_url()?>member/detailNews/<?=$d['id_berita']?>" class="list-group-item"><?=$d['judul_berita']?></a>
                        <?php
                    }
                    ?>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('member/footer');
?>