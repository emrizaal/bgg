<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Event</h2> 
                <hr>
            </div>
        </div>              
        <div class="row">
            <div class="col-md-12">
                <a href="<?=base_url()?>admin/addEvent"><button class="btn btn-primary">Add New</button></a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Member Only</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            foreach($data as $d){
                                ?>
                                <tr>
                                    <td><?=$no?></td>
                                    <?php if($d['image'] != null):?>

                                    <td><img src="<?=base_url()?>admin_assets/img/<?=$d['image']?>" width="200px"></td>
                                    <?php else:?>
                                        <td><img src="<?=base_url()?>admin_assets/img/noim.jpg" width="200px"></td>
                                    <?php endif;?>
                                    <td><?=$d['name']?></td>
                                    <td><?=$d['start_date']?></td>
                                    <td><?=$d['end_date']?></td>
                                    <td><?=$d['status']==1 ? 'Aktif' : 'Tidak Aktif'?></td>
                                    <td><?=$d['is_member']==1 ? 'Yes' : 'No'?></td>
                                    <td>
                                        <a href="<?=base_url()?>admin/detailEvent/<?=$d['id_event']?>">Detail</a> | 
                                        <a href="<?=base_url()?>admin/editEvent/<?=$d['id_event']?>">Edit</a> | 
                                        <a href="<?=base_url()?>admin/deleteEvent/<?=$d['id_event']?>" onclick="return confirm('Are you sure you ?');">delete</a>
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