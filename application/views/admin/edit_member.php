<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Edit Member</h2> 
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="<?=base_url()?>admin/updateMember" method="POST" role="form">
                    <input type="hidden" name="id" value="<?=$data['id_user']?>">
                    <div class="form-group">
                        <label>No. Membership</label>
                        <input class="form-control" name="no_membership" value="<?=$data['no_membership']?>" />
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="nama" value="<?=$data['nama']?>"/>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Berlaku</label>
                        <input class="form-control" name="tanggal_berlaku" value="<?=$data['tanggal_berlaku']?>"/>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Jatuh Tempo</label>
                        <input class="form-control" name="tanggal_jatuh_tempo" value="<?=$data['tanggal_jatuh_tempo']?>"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" value="<?=$data['email']?>"/>
                    </div>
                    
                    <hr>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?=base_url()?>admin/member"><button type="button" class="btn">Cancel</button></a>
                </form>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>