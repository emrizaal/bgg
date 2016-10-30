<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Slider</h2> 
                <hr>
            </div>
        </div>              
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
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
                                    <td>
                                        <a href="<?=base_url()?>admin/deleteSlider/<?=$d['id_slider']?>" onclick="return confirm('Are you sure you ?');">delete</a>
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
            <div class="col-md-6">
                <div class="panel panel-info">
                  <div class="panel-heading">Add Slider</div>
                  <div class="panel-body">
                    <form action="<?=base_url()?>admin/saveSlider" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="fupload" class="form-control">
                        </div>
                        <div class="form-group" style="display:none;">
                            <label>Active</label>
                            <div class="radio">
                             <div class="radio">
                                 <label><input type="radio" name="active" value="1" checked>Yes</label>
                             </div>
                             <div class="radio">
                              <label><input type="radio" name="active" value="0">No</label>
                          </div>
                      </div>
                  </div>
                  <hr>
                  <button type="submit" class="btn btn-primary">Save</button>
              </form>
          </div>
      </div>
  </div>
</div>
</div>
<!-- /. PAGE INNER  -->
</div>
<?php 
$this->load->view('admin/footer');
?>