<?php 
$this->load->view("admin/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h2 align="center">Member Type</h2> 
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
                <th>Name</th>
                <th>Fee</th>
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
                  <td><?=$d['name']?></td>
                  <td>Rp. <?=number_format($d['fee'])?></td>
                  <td>
                    <a href="<?=base_url()?>admin/editType/<?=$d['id_member_type']?>">edit</a> | 
                    <a href="<?=base_url()?>admin/deleteType/<?=$d['id_member_type']?>" onclick="return confirm('Are you sure you ?');">delete</a>
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
          <div class="panel-heading">Add Member Type</div>
          <div class="panel-body">
            <form action="<?=base_url()?>admin/saveType" method="POST" role="form" enctype="multipart/form-data">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <label>Fee</label>
              <div class="form-group input-group">
                <span class="input-group-addon">Rp. </span>
                <input type="text" name="fee" class="form-control">
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