<?php include "top.php" ?>
    <div id="ticker" style="overflow: hidden; position: relative; height: 24px;"></div>
<div id="page-content" class="div1">

    <div class="row-section">
    <div class="page-section mar-T20"><h1>Resort Facilities</h1>
        <div class="clear"></div>
    <h2 style="text-align: center;"><?= $data['name'];?></h2>
    </div>
    <!--            <h2 class="tcen">--------------------------</h2>-->

            <div class="clear" style="margin-bottom: 30px;"></div>

<!--            <center><img src="--><?//=base_url()?><!--assets/image/5.jpg"></center>-->
            <div class="block-70-C tjus"><div class="pad-20">
                    <p class="tjus">
                        <?= $data['content'];?>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php include "bot.php" ?>