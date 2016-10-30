<?php 
$this->load->view("admin/header");
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
                <a href="<?=base_url()?>admin/addNews"><button class="btn btn-primary">Add New</button></a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Status</th>
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
                                    <td><img src="<?=base_url()?>admin_assets/img/<?=$d['image']?>" width="200px"></td>
                                    <td><?=$d['judul_berita']?></td>
                                    <td><?=$d['active']==1 ? 'Aktif' : 'Tidak Aktif'?></td>
                                    <td>
                                        <a href="<?=base_url()?>admin/detailNews/<?=$d['id_berita']?>">Detail</a> | 
                                        <a href="<?=base_url()?>admin/editNews/<?=$d['id_berita']?>">Edit</a> | 
                                        <a href="<?=base_url()?>admin/deleteNews/<?=$d['id_berita']?>" onclick="return confirm('Are you sure you ?');">delete</a>
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