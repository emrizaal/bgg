<?php include "top.php" ?>
<div id="ticker" style="overflow: hidden; position: relative; height: 24px;"></div>
<div id="top"></div>
<div style="background-image:url(<?=base_url()?>assets/image/cover_palm.jpg);" class="slides"></div><!-- =========== end cover =========== -->

<div id="page-title-top">COURSE</div>


<!-- =========== CONTENT =========== -->
<div id="course-cell"><div class="wrap">

	<div class="navimb"><ul>
		<li><a href="<?=base_url()?>courses/layout">COURSE LAYOUT</a></li>
	</ul>
	<div class="clear"></div></div>

	<div class="navi"><ul>
		<li><a href="<?=base_url()?>courses/layout">COURSE LAYOUT</a></li>
	</ul>
	<div class="clear"></div></div>

	<div class="content">
		<div class="block-100"><div class="pad-20LR fw">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tbody><tr>
					<td align="left" valign="middle"><span class="f14 fgo ls1"><?=$data['name']?></span>
						<div class="yardage"><span class="par"><?=$data['par']?></span><span class="ybla"><?=$data['black']?> yds</span><span class="yblu"><?=$data['blue']?> yds</span><span class="ywhi"><?=$data['white']?> yds</span><span class="yred"><?=$data['red']?> yds</span></div></td>
					</tr>
				</tbody></table>
			</div></div>
			<div class="block-22L border-R"><div class="pad-20LR fw"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tbody><tr><td><span class="f14 fgo ls2"><?=$data['name']?></span><br>
					</td></tr>
					<tr><td class="t15"><?=$data['par']?></td></tr>
					<tr><td><div class="yardage"><div class="y50"><span class="ybla"><?=$data['black']?> yds</span><span class="yblu"><?=$data['blue']?> yds</span></div><div class="y50"><span class="ywhi"><?=$data['white']?> yds</span><span class="yred"><?=$data['red']?> yds</span></div></div></td></tr>
				</tbody></table>
			</div></div>
			<div class="block-48C"><div class="pad-20LR fw">
				<p class="tjus"><?=$data['description']?></p>
			</div></div>
			<div class="block-22R border-L" style="text-align:center;"><div class="pad-20LR fw"><img src="<?=base_url()?>admin_assets/img/<?=$data['image']?>"></div></div>
			<div class="clear"></div></div>

		</div></div><!-- =========== end content =========== -->
		<?php include "bot.php" ?>