<?php include "top.php" ?>
<link rel="stylesheet" type="text/css" href="assets/cupertino/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/fullcalendar.css">
<link rel="stylesheet" type="text/css" href="assets/css/fullcalendar.print.css">
<script type="text/javascript" src="assets/js/fullcalendar.min.js"></script>
<script type="text/javascript" src="assets/js/moment.min.js"></script>


<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			theme: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			defaultDate: '2016-09-12',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
			{
				title: 'All Day Event',
				start: '2016-09-01'
			},
			{
				title: 'Long Event',
				start: '2016-09-07',
				end: '2016-09-10'
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: '2016-09-09T16:00:00'
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: '2016-09-16T16:00:00'
			},
			{
				title: 'Conference',
				start: '2016-09-11',
				end: '2016-09-13'
			},
			{
				title: 'Meeting',
				start: '2016-09-12T10:30:00',
				end: '2016-09-12T12:30:00'
			},
			{
				title: 'Lunch',
				start: '2016-09-12T12:00:00'
			},
			{
				title: 'Meeting',
				start: '2016-09-12T14:30:00'
			},
			{
				title: 'Happy Hour',
				start: '2016-09-12T17:30:00'
			},
			{
				title: 'Dinner',
				start: '2016-09-12T20:00:00'
			},
			{
				title: 'Birthday Party',
				start: '2016-09-13T07:00:00'
			},
			{
				title: 'Click for Google',
				url: 'http://google.com/',
				start: '2016-09-28'
			}
			]
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