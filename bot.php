<div id="page-up" class="div8"><span class="up"><a href="#top">PAGE  UP</a></span></div>

      <!-- =========== footer =========== -->
      <div id="footer" class="div4">
        <div class="wrap">
          <div class="footnewsmail"><div class="padLR30">
            <p>Receive updates, events and more to your inbox.</p>
            <span class="button-form"><a class="sign fancybox" data-fancybox-type="iframe" href="#">SIGN UP FOR NEWSMAIL</a></span>
          </div></div>
          <div class="footmenu">
            <div class="link">
              <span class="f12 ls1 fw">MEMBERSHIP</span>
              <p class="t12 fw"><a href="members_general.php">General information on our membership</a></p>
            </div>
            <div class="link">
              <span class="f12 ls1 fw">PROMOTIONS</span>
              <p class="t13 fw"><a href="rates_golf.php">Golf Packages &amp; F&amp;B </a></p>
            </div>
            <div class="link">
              <span class="f12 ls1 fw">FACTSHEET</span>
              <p class="t12 fw"><a href="#" target="_blank">Download the club's factsheet</a></p>
            </div>
            <div class="link">
              <span class="f12 ls1 fw">HOTEL</span>
              <p class="t12 fw"><a href="resort.php">Resort</a></p>
            </div>
            <div class="link">
              <span class="f12 ls1 fw">BOOKING</span>
              <p class="t12 fw"><a href="#" target="_blank">Make your reservations online now</a></p>
              <p class="t12 fw"><a href="#" target="_blank">Booking Form</a></p>
            </div>
          </div>

          <div class="clear"></div>

          <div class="clear"></div>

          <div class="misc">
            <!--<div class="col-partners"></div>-->
            <div class="col-social"><!-- AddThis Button BEGIN -->
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>

                </tr>
                <tr>
                  <td valign="top"><div class="miscmenu"><ul><li><a href="#">Inquiry</a></li><li><a href="#">Terms &amp; Conditions</a></li>
                  </ul></div></td>
                </tr>
              </tbody></table>
              <!-- AddThis Button END --></div><div class="clear"></div></div><p class="disclaimer">© Copyright 2016.</p>
            </div>
          </div>

          <!-- =========== end footer =========== -->



          <script src="assets/js/cbpHorizontalMenu.js"></script>
          <script>
            $(function() {
             cbpHorizontalMenu.init();
           });
         </script>



         <script type="text/javascript">
          $(function() {
            $('div#page-up a').bind('click',function(event){
              var $anchor = $(this);

              $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
              }, 1000,'easeInOutExpo');
              event.preventDefault();
            });
          });

        </script>
        <script type="text/javascript">
          $(function() {
            $('div#page-down a').bind('click',function(event){
              var $anchor = $(this);

              $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
              }, 1000,'easeInOutExpo');
              event.preventDefault();
            });
          });

        </script>

        <script type="text/javascript">
          $(function() {
            $('div.discover a').bind('click',function(event){
              var $anchor = $(this);

              $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
              }, 1000,'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                  });
          });

        </script>




      </body></html>