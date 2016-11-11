<?php
$this->load->view("member/header");
?>
<!--<script src="--><?//=base_url()?><!--assets/js/jquery.js"></script>-->
<script src="<?=base_url();?>admin_assets/js/jquery-1.10.2.js"></script>


<link rel="stylesheet" type="text/css" href="<?=base_url()?>admin_assets/cupertino/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>admin_assets/css/fullcalendar.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>admin_assets/css/fullcalendar.print.css">



<script>

    $(document).ready(function() {

        var base_url = window.location.origin;
        var calendar_url = base_url +'/bgg/member/calendardata';


        $('#calendar').fullCalendar({
            theme: true,
            header: {
                left: 'title',
                center: '',
                right: 'today,prev,next '
            },
            buttonText: {
                prev: "PREV",
                next: "NEXT",
                prevYear: "&nbsp;&lt;&lt;&nbsp;",
                nextYear: "&nbsp;&gt;&gt;&nbsp;",
                today: "TODAY",
                month: "Month",
                week: "Week",
                day: "Day"
            },
            buttonIcons: {
                prev: '',
                next: ''
            },
            defaultDate: '2016-09-12',
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: calendar_url
        });

    });

</script>
<style>

    #loading {
        display: none;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    #calendar {
        width: 85%;
        margin: 0 auto;
    }

</style>

<!-- =========== CONTENT =========== -->
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">

        <div class="page-section mar-T20"><h1>EVENT CALENDAR</h1></div>

        <div class="block-100"><div class="pad-20">
                <div id="indicator"><div></div>Please click on the event for further details.</div>
                <div id='loading'>loading...</div>

                <div id='calendar'></div>
            </div></div><!-- end block  -->

        <div class="clear"></div></div><!-- end row section  -->

        </div>
    </div>
</div>
<!-- /. PAGE INNER  -->
</div><!-- =========== end content =========== -->
<?php
$this->load->view('member/footer');
?>
