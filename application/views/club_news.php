<?php include "top.php" ?>
<div id="ticker" style="overflow: hidden; position: relative; height: 24px;"></div>


<!-- =========== CONTENT =========== -->
<div id="page-content" class="div1">

	<div class="row-section">

		<div class="page-section mar-T20"><h1>News Updates</h1></div>

		<div class="block-80-C"><div class="pad-20">
                <?php foreach($news as $n){
                    ?>
                    <div class="accordion accordion-close"><?=$n['judul_berita']?><span></span></div>
                    <div class="container" style="display: none;"><div class="news"><img src="<?=base_url()?>admin_assets/img/<?= $n['image']?>"><p></p><p><?=$n['isi_berita']?></p>
                        </div></div><!-- end container  -->

                <?php
                }?>
<!--			<div class="accordion accordion-close">In Loving Memory K Ravindranathan<span></span></div>-->
<!--			<div class="container" style="display: none;"><div class="news"><img src="--><?//=base_url()?><!--assets/image/bggresort.jpg"><p></p><p>Our deepest condolences from the Board of Directors, Management &amp; Staff of Peremba Group of Companies and Board of Directors, Members, Management &amp; Staff of Saujana Golf &amp; Country Club.&nbsp;</p><p></p><p><a href="club_news.php" target="_blank">More on </a></p>-->
<!--			</div></div>-->
<!---->
<!--			<div class="accordion accordion-close">Saujana Becomes A European Tour Destination<span></span></div>-->
<!--			<div class="container" style="display: none;"><div class="news"><img src="--><?//=base_url()?><!--assets/image/bggresort.jpg"><p></p><p><a href="#" target="_blank">More on http://www.europeantour.com</a></p>-->
<!--			</div></div>-->
<!---->
<!--			<div class="accordion accordion-close">MPI Saujana Amateur Championship 2015 - Draw &amp; Results<span></span></div>-->
<!--			<div class="container" style="display: none;"><div class="news"><p>Click the link below for full results</p><p><a href="--><?//=base_url()?><!--events/results" target="_blank">More on /event_results.php</a></p>-->
<!--			</div></div>-->
<!---->
<!--			<div class="accordion accordion-close">Palm Course closure for upgrading works<span></span></div>-->
<!--			<div class="container" style="display: none;"><div class="news"><p>Palm Course 1st Nine - July 2014 and is scheduled to reopen in April 2015.<br>-->
<!--				Palm Course 2nd Nine – December 2014 and is scheduled to reopen in July 2015.<br><br>-->
<!--				From December 2014 till April 2015<br>-->
<!--				- Only 18 holes of Bunga Raya course will be available for play.<br>-->
<!--				- 1st Nine Bunga Raya course – close until 12.00 noon on Mondays for maintenance<br>-->
<!--				- 2nd Nine Bunga Raya course – close until 12.00 noon on Tuesdays for maintenance</p><p><a href="--><?//=base_url()?><!--club/news" target="_blank">More on </a></p>-->
<!--			</div></div>-->
<!---->
<!--			<div class="accordion accordion-close">Discounted Rates during Palm Course closure<span></span></div>-->
<!--			<div class="container" style="display: none;"><div class="news"><img src="--><?//=base_url()?><!--assets/image/bggresort.jpg"><p>During the closure of the Palm Course, members can now enjoy discounted rates at the above golf clubs from December 2014.</p><p><a href="--><?//=base_url()?><!--club/news" target="_blank">More on </a></p>-->
<!--			</div></div>-->
<!---->
<!--			<div class="accordion accordion-close">Palm Course Rank 6 in World\'s Toughest Golf Course<span></span></div>-->
<!--			<div class="container" style="display: none;"><div class="news"><img src="--><?//=base_url()?><!--assets/image/bggresort.jpg"><p>The Palm Course at Saujana is so tough it\'s been nicknamed \"The Cobra\" and its fangs have tested many of the world\'s top golfers as it\'s hosted six of the last 13 Malaysian Opens, a co-sanctioned European/Asian Tour event. Past winners include former world number one Vijay Singh. With jungle lining many fairways, and water and sand hazards in abundance, just getting to the green is a struggle. But that\'s when the real problems start because The Cobra\'s super fast, heavily undulating putting surfaces are probably the hardest to putt on in the world, including those at Augusta. Only great putters win at Saujana.</p><p><a href="www.cnn.com" target="_blank">More on www.cnn.com</a></p>-->
<!--			</div></div>-->
<!---->
<!--			<div class="accordion accordion-close">Obey Starters &amp; Course Marshals<span></span></div>-->
<!--			<div class="container" style="display: none;"><div class="news"><p>All golfers are reminded to obey and follow the instructions of the Starters and Course Marshals in the execution of their duties. Their chief function is to ensure the smooth flow on the course. The management shall not hesitate to bring disciplinary actions against any errant member of, in the case of a guest, the introducing member. Your cooperation is highly appreciated.</p><p><a href="--><?//=base_url()?><!--club/news" target="_blank">More on </a></p>-->
<!--			</div></div>-->
<!---->
<!--			<div class="accordion accordion-close">Littering Bugs<span></span></div>-->
<!--			<div class="container" style="display: none;"><div class="news"><p>Littering is prevalent on the course. Please dispose of your trash properly into the litterbins replace at every tee box on the course. Cigarette butts should not be strewn all over tee boxes and greens.</p><p><a href="--><?//=base_url()?><!--club/news" target="_blank">More on </a></p>-->
<!--			</div></div>-->
<!---->
<!--			<div class="accordion accordion-close">Handicap Requirements<span></span></div>-->
<!--			<div class="container" style="display: none;"><div class="news"><p>Kindly take note ALL guests are required to show their valid handicap card upon registration. Should a valid card not be shown guest will not be allowed on the course.</p><p><a href="--><?//=base_url()?><!--club/news" target="_blank">More on </a></p>-->
<!--			</div></div>-->


		</div></div><!-- end block  -->

		<div class="clear"></div></div><!-- end row section  -->

	</div><!-- =========== end content =========== -->

	<?php include "bot.php" ?>