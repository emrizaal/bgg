<?php include "top.php" ?>
<div id="ticker" style="overflow: hidden; position: relative; height: 24px;"></div>
<!-- =========== CONTENT =========== -->
<div id="page-content" class="div1" style="margin-top:20px;">
	<div class="row-section">
		<div class="page-section mar-T20"><h1>Golf Rates</h1></div>

		<div class="block-80-C"><div class="pad-20">
			<!-- Tabblock  -->
			<div class="tabblock">
				<div id="tab">
					<div class="list-wrap" style="height: 582px;">
						<div id="golfrates" style="display: block;">
							<h2 class="tcen mar-T20">PUBLISHED RATES</h2>
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="rates">
								<tbody>
                                <?php

                                foreach($data as $f){
                                    ?>
                                    <tr><td width="60%" class="fgr"><?=$f['name']?></td>
                                        <td width="40%"><?=$f['price']?></td>
                                    </tr>

                                    <?php
                                }
                                ?>
								</tbody>
							</table>

						</div><!--  End golf rates -->	

						<div id="promotions" class="hide" style="position: relative; top: 0px; left: 0px; display: none;">




						</div><!--  End promotions  -->	

					</div><!--  End listwrap  -->	

				</div></div><!-- xxxxxxxxxxxxxx End tabblock xxxxxxxxxxxxxx -->	
			</div></div><!-- End Block  -->

			<div class="clear"></div></div>

		</div><!-- =========== end content =========== -->
		<?php include "bot.php" ?>