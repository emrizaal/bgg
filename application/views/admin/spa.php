<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Spa</h2> 
                <hr>
            </div>
        </div>              
        <div class="row" align="center">
            <div class="col-md-12">
                <form action="<?=base_url()?>admin/saveSpa" method="POST">
                    <textarea id="edit" name="content"><?=$data['content']?></textarea>
<!--                    <textarea name="content" cols="120" rows="20"></textarea>-->
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