<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Add Member</h2> 
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="<?=base_url()?>admin/saveMember" method="POST" role="form">
                    <div class="form-group">
                        <label>No. Membership</label>
                        <input class="form-control" name="no_membership"/>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="nama"/>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Berlaku</label>
                        <input class="form-control" name="tanggal_berlaku"/>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Jatuh Tempo</label>
                        <input class="form-control" name="tanggal_jatuh_tempo"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email"/>
                    </div>
                    <div class="form-group">
                        <label>Lunas</label>
                        <div class="radio">
                         <label><input type="radio" name="lunas" value="1" checked>Yes</label>
                     </div>
                     <div class="radio">
                        <label><input type="radio" name="lunas" value="0">No</label>
                    </div>
                    <div class="form-group">
                        <label>Member Type</label>
                        <select name="type" class="form-control">
                            <?php 
                            foreach($data as $d){
                                ?>
                                <option value="<?=$d['id_member_type']?>"><?=$d['name']?></option>
                                <?php 
                            }
                            ?>
                        </select>
                    </div>
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