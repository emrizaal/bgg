<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Promotions</h2> 
                <hr>
            </div>
        </div>              
        <div class="row">
            <div class="col-md-12">
                <a href="<?=base_url()?>admin/addPromotions"><button class="btn btn-primary">Add New</button></a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Desc</th>
                                <th>Member Only</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            
                            foreach($data as $f){
                                ?>
                                <tr>
                                    <td><?=$no?></td>
                                    <td><?=$f['name']?></td>
                                    <td><?=$f['content']?></td>
                                    <td><?=$f['is_member']==1 ? 'Yes' : 'No'?></td>
                                    <td>
                                        <a href="<?=base_url()?>admin/editPromotions/<?=$f['id_promotion']?>">Edit</a> | 
                                        <a href="<?=base_url()?>admin/deletePromotions/<?=$f['id_promotion']?>" onclick="return confirm('Are you sure you ?');">delete</a>
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