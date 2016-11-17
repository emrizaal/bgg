<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Course</h2> 
                <hr>
            </div>
        </div>              
        <div class="row">
            <div class="col-md-12">
                <a href="<?=base_url()?>admin/addCourse"><button class="btn btn-primary">Add New</button></a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th colspan="2">Distance</th>
                                <th>Par</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            foreach($data as $d){
                                ?>
                                <tr>
                                    <td rowspan="2"><?=$no?></td>
                                    <td rowspan="2"><img src="<?=base_url()?>admin_assets/img/<?=$d['image']?>" width="50px"></td>
                                    <td rowspan="2"><?=$d['name']?></td>
                                    <td><img src="<?=base_url()?>assets/image/yard_black.png"> <?=$d['black']?> yds</td>
                                    <td><img src="<?=base_url()?>assets/image/yard_white.png"> <?=$d['white']?> yds</td>
                                    <td rowspan="2"><?=$d['par']?></td>
                                    <td rowspan="2">
                                        <a href="<?=base_url()?>admin/detailCourse/<?=$d['id_course']?>">Detail</a> | 
                                        <a href="<?=base_url()?>admin/editCourse/<?=$d['id_course']?>">Edit</a> | 
                                        <a href="<?=base_url()?>admin/deleteCourse/<?=$d['id_course']?>" onclick="return confirm('Are you sure you ?');">delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?=base_url()?>assets/image/yard_blue.png"> <?=$d['blue']?> yds</td>
                                    <td><img src="<?=base_url()?>assets/image/yard_red.png"> <?=$d['red']?> yds</td>
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