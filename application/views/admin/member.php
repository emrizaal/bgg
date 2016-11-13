<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Member</h2> 
                <hr>
            </div>
        </div>              
        <div class="row">
            <div class="col-md-12">
                <a href="<?=base_url()?>admin/addMember"><button class="btn btn-primary">Add New</button></a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No Membership</th>
                                <th>Name</th>
                                <th>Tanggal Berlaku</th>
                                <th>Tanggal Jatuh Tempo</th>
                                <th>Email</th>
                                <th>Lunas</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            foreach($data as $d){
                                ?>
                                <tr>
                                    <td><?=$d['no_membership']?></td>
                                    <td><?=$d['nama']?></td>
                                    <td><?=$d['tanggal_berlaku']?></td>
                                    <td><?=$d['tanggal_jatuh_tempo']?></td>
                                    <td><?=$d['email']?></td>
                                    <td><?=$d['lunas']==1 ? 'Yes' : 'No'?></td>
                                    <td>
                                        <a href="<?=base_url()?>admin/editMember/<?=$d['id_user']?>">Edit</a> | 
                                        <a href="<?=base_url()?>admin/deleteMember/<?=$d['id_user']?>" onclick="return confirm('Are you sure you ?');">delete</a>
                                    </td>
                                </tr>
                                <?php 
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>