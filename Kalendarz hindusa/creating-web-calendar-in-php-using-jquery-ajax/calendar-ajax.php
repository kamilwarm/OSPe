<?php
require_once 'class.calendar.php';
$phpCalendar = new PHPCalendar ();

$calendarHTML = $phpCalendar->getCalendarHTML();
echo $calendarHTML;
?>