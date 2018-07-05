<?php
require_once 'class.calendar.php';
$phpCalendar = new PHPCalendar ();
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>PHP Calendar</title>
</head>
<body>
<div id="body-overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
<div id="calendar-html-output">
<?php
$calendarHTML = $phpCalendar->getCalendarHTML();
echo $calendarHTML;
?>
</div>
<script src="jquery-1.11.2.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$(document).on("click", '.prev', function(event) { 
		var month =  $(this).data("prev-month");
		var year =  $(this).data("prev-year");
		getCalendar(month,year);
	});
	$(document).on("click", '.next', function(event) { 
		var month =  $(this).data("next-month");
		var year =  $(this).data("next-year");
		getCalendar(month,year);
	});
	$(document).on("blur", '#currentYear', function(event) { 
		var month =  $('#currentMonth').text();
		var year = $('#currentYear').text();
		getCalendar(month,year);
	});
});
function getCalendar(month,year){
	$("#body-overlay").show();
	$.ajax({
		url: "calendar-ajax.php",
		type: "POST",
		data:'month='+month+'&year='+year,
		success: function(response){
			setInterval(function() {$("#body-overlay").hide(); },500);
			$("#calendar-html-output").html(response);	
		},
		error: function(){} 
	});
	
}
</script>
</body>
</html>