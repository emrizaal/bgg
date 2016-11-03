<?php include "top.php" ?>
    <div id="ticker" style="overflow: hidden; position: relative; height: 24px;"></div>
<div id="page-content" class="div1">

    <div class="row-section">
    <div class="page-section mar-T20"><h1>Resort</h1></div>
    <!--            <h2 class="tcen">--------------------------</h2>-->

    <div class="row-section">
    <div class="block-70-C tjus"><div class="pad-20">
            <p>Bandung Giri Gahana  Golf &amp; Resort also features other recreational facilities</p>
            <div class="block-48-L">
                <span class="f16 fgr">FACILITIES</span>
                <ul class="list-noborder">
                    <?php
                    $i=0;
                    foreach($data as $f){
                        ?>
                        <li><a href="<?=base_url()?>resort/detailResortFacilities/<?=$f['id_resort_facilities']?>"><?=$f['name']?></a> </li>
                        <?php
                        $i++;
                        if($i==10) break;
                    }
                    ?>
                </ul>
            </div>
                <div class="block-48-R">
                    <span class="f16 fgr">&nbsp;</span>
                    <ul class="list-noborder">
                        <?php
                        $num = 10;
                        foreach(array_slice($data, $num) as $key => $f){
                            ?>
                            <li><a href="<?=base_url()?>resort/detailResortFacilities/<?=$f['id_resort_facilities']?>"><?=$f['name']?></a> </li>

                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="clear" style="margin-bottom: 30px;"></div>

            <center><img src="<?=base_url()?>assets/image/5.jpg"></center>
            <div class="block-70-C tjus"><div class="pad-20">
                    <p class="tjus">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

<?php include "bot.php" ?>