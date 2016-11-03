<?php include "top.php" ?>
    <div id="ticker" style="overflow: hidden; position: relative; height: 24px;"></div>
    <div id="page-content" class="div1">

        <div class="row-section">
            <div class="page-section mar-T20"><h1>Restaurants</h1></div>
<!--            <h2 class="tcen">--------------------------</h2>-->

<!--            <center><img src="--><?//=base_url()?><!--assets/image/4.jpg"></center>-->
            <div class="block-70-C tjus"><div class="pad-20">
                    <p class="tjus">
                        <?= $restaurant['content'];?>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php include "bot.php" ?>