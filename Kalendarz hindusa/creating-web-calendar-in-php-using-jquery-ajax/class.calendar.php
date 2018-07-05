<?php
class PHPCalendar {
	private $weekDayName = array ("MON","TUE","WED","THU","FRI","SAT","SUN");
	private $currentDay = 0;
	private $currentMonth = 0;
	private $currentYear = 0;
	private $currentMonthStart = null;
	private $currentMonthDaysLength = null;	
	
	function __construct() {
		$this->currentYear = date ( "Y", time () );
		$this->currentMonth = date ( "m", time () );
		
		if (! empty ( $_POST ['year'] )) {
			$this->currentYear = $_POST ['year'];
		}
		if (! empty ( $_POST ['month'] )) {
			$this->currentMonth = $_POST ['month'];
		}
		$this->currentMonthStart = $this->currentYear . '-' . $this->currentMonth . '-01';
		$this->currentMonthDaysLength = date ( 't', strtotime ( $this->currentMonthStart ) );
	}
	
	function getCalendarHTML() {
		$calendarHTML = '<div id="calendar-outer">'; 
		$calendarHTML .= '<div class="calendar-nav">' . $this->getCalendarNavigation() . '</div>'; 
		$calendarHTML .= '<ul class="week-name-title">' . $this->getWeekDayName () . '</ul>';
		$calendarHTML .= '<ul class="week-day-cell">' . $this->getWeekDays () . '</ul>';		
		$calendarHTML .= '</div>';
		return $calendarHTML;
	}
	
	function getCalendarNavigation() {
		$prevMonthYear = date ( 'm,Y', strtotime ( $this->currentMonthStart. ' -1 Month'  ) );
		$prevMonthYearArray = explode(",",$prevMonthYear);
		
		$nextMonthYear = date ( 'm,Y', strtotime ( $this->currentMonthStart . ' +1 Month'  ) );
		$nextMonthYearArray = explode(",",$nextMonthYear);
		
		$navigationHTML = '<div class="prev" data-prev-month="' . $prevMonthYearArray[0] . '" data-prev-year = "' . $prevMonthYearArray[1]. '"><</div>'; 
		$navigationHTML .= '<span id="currentMonth">' . date ( 'M', strtotime ( $this->currentMonthStart ) ) . '</span>';
		$navigationHTML .= '<span contenteditable="true" id="currentYear" style="margin-left:5px">'.	date ( 'Y', strtotime ( $this->currentMonthStart ) ) . '</span>';
		$navigationHTML .= '<div class="next" data-next-month="' . $nextMonthYearArray[0] . '" data-next-year = "' . $nextMonthYearArray[1]. '">></div>';
		return $navigationHTML;
	}
	
	function getWeekDayName() {
		$WeekDayName= '';		
		foreach ( $this->weekDayName as $dayname ) {			
			$WeekDayName.= '<li>' . $dayname . '</li>';
		}		
		return $WeekDayName;
	}
	
	function getWeekDays() {
		$weekLength = $this->getWeekLengthByMonth ();
		$firstDayOfTheWeek = date ( 'N', strtotime ( $this->currentMonthStart ) );
		$weekDays = "";
		for($i = 0; $i < $weekLength; $i ++) {
			for($j = 1; $j <= 7; $j ++) {
				$cellIndex = $i * 7 + $j;
				$cellValue = null;
				if ($cellIndex == $firstDayOfTheWeek) {
					$this->currentDay = 1;
				}
				if (! empty ( $this->currentDay ) && $this->currentDay <= $this->currentMonthDaysLength) {
					$cellValue = $this->currentDay;
					$this->currentDay ++;
				}
				$weekDays .= '<li>' . $cellValue . '</li>';
			}
		}
		return $weekDays;
	}
	
	function getWeekLengthByMonth() {
		$weekLength =  intval ( $this->currentMonthDaysLength / 7 );	
		if($this->currentMonthDaysLength % 7 > 0) {
			$weekLength++;
		}
		$monthStartDay= date ( 'N', strtotime ( $this->currentMonthStart) );		
		$monthEndingDay= date ( 'N', strtotime ( $this->currentYear . '-' . $this->currentMonth . '-' . $this->currentMonthDaysLength) );
		if ($monthEndingDay < $monthStartDay) {			
			$weekLength++;
		}
		
		return $weekLength;
	}
}
?>