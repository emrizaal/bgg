<div id="page-up" class="div8"><span class="up"><a href="#top">BACK TO THE TOP</a></span></div>

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


          <script src="<?=base_url()?>assets/js/cbpHorizontalMenu.js"></script>
<script src="<?=base_url()?>assets/thumbnails/simplegallery.min.js"></script>
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
<script type="text/javascript">
    $(document).ready(function(){

        $('#gallery').simplegallery({
            galltime : 400,
            gallcontent: '.content',
            gallthumbnail: '.thumbnail',
            gallthumb: '.thumb'
        });

    });
</script>

<script type="text/javascript">
    $(function(){

        //giri dialogBox
        $('#giri').click(function(){
            $('#giri-dialogBox').dialogBox({
                hasClose: true,
//                hasMask: true,
                time: 3000,
                title: 'THE "GIRI" 9',
                content:
                    '<section id="gallery" class="simplegallery">' +
                    '<div class="content">' +
                '<img src="<?=base_url()?>assets/image/bgggolf.jpg" class="image_1" alt="" />'+
                '<img src="<?=base_url()?>assets/image/bgggolf2.jpg" class="image_2" style="display:none" alt="" />'+
                '<img src="<?=base_url()?>assets/image/bggresort.jpg" class="image_3" style="display:none" alt="" />'+
                '<img src="<?=base_url()?>assets/image/bggresort2.jpg" class="image_4" style="display:none" alt="" />'+
                '</div>'+

            '<div class="clear"></div>'+

            '<div class="thumbnail">'+
                '<div class="thumb">'+
                '<a href="#" rel="1">'+
                '<img src="<?=base_url()?>assets/image/bgggolf.jpg" id="thumb_1" alt="" />'+
                '</a>'+
            '</div>'+
            '<div class="thumb">'+
                '<a href="#" rel="2">'+
                '<img src="<?=base_url()?>assets/image/bgggolf2.jpg" id="thumb_2" alt="" />'+
                '</a>'+
            '</div>'+
            '<div class="thumb">'+
                '<a href="#" rel="3">'+
                '<img src="<?=base_url()?>assets/image/bggresort.jpg" id="thumb_3" alt="" />'+
                '</a>'+
            '</div>'+
            '<div class="thumb last">'+
                '<a href="#" rel="4">'+
                '<img src="<?=base_url()?>assets/image/bggresort2.jpg" id="thumb_4" alt="" />'+
                '</a>'+
            '</div>'+
            '</div>' +
            '</section>'
            });
        });


        //gahana dialogBox
        $('#gahana').click(function(){
            $('#gahana-dialogBox').dialogBox({
                hasClose: true,
//                hasMask: true,
                time: 3000,
                title: 'THE "GAHANA" 9',
                content:
                    '<section id="gallery" class="simplegallery">' +
                        '<div class="content">' +
                        '<img src="<?=base_url()?>assets/image/bgggolf.jpg" class="image_1" alt="" />'+
                        '<img src="<?=base_url()?>assets/image/bgggolf2.jpg" class="image_2" style="display:none" alt="" />'+
                        '<img src="<?=base_url()?>assets/image/bggresort.jpg" class="image_3" style="display:none" alt="" />'+
                        '<img src="<?=base_url()?>assets/image/bggresort2.jpg" class="image_4" style="display:none" alt="" />'+
                        '</div>'+
                        '<div class="clear"></div>'+
                        '<div class="thumbnail">'+
                        '<div class="thumb">'+
                        '<a href="#" rel="1">'+
                        '<img src="<?=base_url()?>assets/image/bgggolf.jpg" id="thumb_1" alt="" />'+
                        '</a>'+
                        '</div>'+
                        '<div class="thumb">'+
                        '<a href="#" rel="2">'+
                        '<img src="<?=base_url()?>assets/image/bgggolf2.jpg" id="thumb_2" alt="" />'+
                        '</a>'+
                        '</div>'+
                        '<div class="thumb">'+
                        '<a href="#" rel="3">'+
                        '<img src="<?=base_url()?>assets/image/bggresort.jpg" id="thumb_3" alt="" />'+
                        '</a>'+
                        '</div>'+
                        '<div class="thumb last">'+
                        '<a href="#" rel="4">'+
                        '<img src="<?=base_url()?>assets/image/bggresort2.jpg" id="thumb_4" alt="" />'+
                        '</a>'+
                        '</div>'+
                        '</div>' +
                        '</section>'
            });
        });

        //gahana dialogBox
        $('#banch').click(function(){
            $('#banch-dialogBox').dialogBox({
                hasClose: true,
//                hasMask: true,
                time: 3000,
                title: 'BANCH GRASS GREEN',
                content:
                    '<section id="gallery" class="simplegallery">' +
                        '<div class="content">' +
                        '<img src="<?=base_url()?>assets/image/bgggolf.jpg" class="image_1" alt="" />'+
                        '<img src="<?=base_url()?>assets/image/bgggolf2.jpg" class="image_2" style="display:none" alt="" />'+
                        '<img src="<?=base_url()?>assets/image/bggresort.jpg" class="image_3" style="display:none" alt="" />'+
                        '<img src="<?=base_url()?>assets/image/bggresort2.jpg" class="image_4" style="display:none" alt="" />'+
                        '</div>'+
                        '<div class="clear"></div>'+

                        '</section>'
            });
        });

    });
</script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>


</body></html>