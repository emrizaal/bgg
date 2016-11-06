<?php include "top.php" ?>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/cupertino/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/fullcalendar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/fullcalendar.print.css">
    <script type="text/javascript" src="<?=base_url()?>assets/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/moment.min.js"></script>


<script>

	$(document).ready(function() {

        var base_url = window.location.origin;
        var calendar_url = base_url +'/bgg/events/calendardata';
        

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
		max-width: 900px;
		margin: 0 auto;
	}

</style>
<div id="ticker" style="overflow: hidden; position: relative; height: 24px;"></div>


<!-- =========== CONTENT =========== -->
<div id="page-content" class="div1">

	<div class="row-section">

		<div class="page-section mar-T20"><h1>EVENT CALENDAR</h1></div>

		<div class="block-100"><div class="pad-20">
			<div id="indicator"><div></div>Please click on the event for further details.</div>
			<div id='loading'>loading...</div>

			<div id='calendar'></div>
		</div></div><!-- end block  -->

		<div class="clear"></div></div><!-- end row section  -->


	</div><!-- =========== end content =========== -->
	<?php include "bot.php" ?>