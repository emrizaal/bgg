<?php include "top.php" ?>
<div id="ticker" style="overflow: hidden; position: relative; height: 24px;"></div>
<!-- =========== CONTENT =========== -->
<div id="page-content" class="div1">

	<div class="page-section mar-T20">
		<h1>BUNGA RAYA COURSE</h1>
	</div>
	<h2 class="tcen">COURSE LAYOUT</h2>

	<div class="row-section">

		<div class="block-80-C"><div class="pad-20">
			<?php 
			foreach($data as $d){
				?>
				<div class="layout33"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="hole-detail">
					<tbody><tr>
					<td align="center" class="td-link"><a href="<?=base_url()?>courses/detail/<?=$d['id_course']?>"><img src="<?=base_url()?>admin_assets/img/<?=$d['image']?>"></a></td>
					</tr>
					<tr>
						<td class="td-border-top"><span class="f14 fgr"><?=$d['name']?></span></td>
					</tr>
					<tr>
						<td class="td-border-top"><?=$d['par']?></td>
					</tr>
					<tr><td><div class="yardage">
						<div class="y50"><span class="ybla"><?=$d['black']?> yds</span><span class="yblu"><?=$d['blue']?> yds</span></div>
						<div class="y50"><span class="ywhi"><?=$d['white']?> yds</span><span class="yred"><?=$d['red']?> yds</span></div>
					</div></td></tr>
				</tbody></table> </div>
				<?php } ?>
			</div>
			<div class="clear"></div></div>

			<div class="clear"></div></div>

		</div><!-- =========== end content =========== -->
		<?php include "bot.php" ?>