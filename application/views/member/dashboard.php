<?php 
$this->load->view("member/header");
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
               <center><h2>Welcome In Membership Page</h2></center>


               <div class="panel panel-default">
                <div class="panel-heading">Anouncemenet</div>
                <div class="panel-body"><?=$ann['content']?></div>
            </div>

            <div class="panel panel-default" style="width:30%;">
                <div class="panel-heading">Annual Fee</div>
                <div class="panel-body"> 
                Anda tergabung selama <b><?=$fee['name']?></b> dengan fee sebesar <b>Rp.<?=number_format($fee['fee'])?></b><hr>
                    <?php 
                    if($this->session->userdata['lunas']==0){
                        ?>
                        <span style="color:red">
                        Batas pembayaran iuran tahunan Anda jatuh pada setiap tanggal
                        <b>
                            <?php 
                            $tgl = new DateTime($this->session->userdata('tanggal_dibuat'));
                            echo $tgl->format("d F");
                            ?>
                        </b>
                        </span>
                        <?php }else{ ?>
                            <b>-- Lunas --</b>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Promotion</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Desc</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=1;

                                        foreach($promo as $f){
                                            ?>
                                            <tr>
                                                <td><?=$no?></td>
                                                <td><?=$f['name']?></td>
                                                <td><?=$f['content']?></td>
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
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <?php 
    $this->load->view('member/footer');
    ?>