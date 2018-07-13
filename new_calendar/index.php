
    <meta name="description" content="Full view calendar component for twitter bootstrap with year, month, week, day views.">
    <meta name="keywords" content="jQuery,Bootstrap,Calendar,HTML,CSS,JavaScript,responsive,month,week,year,day">
    <meta name="author" content="Serhioromano">
    <meta charset="UTF-8">


    <link rel="stylesheet" href="/OSP/calendar/components/bootstrap3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/OSP/calendar/components/bootstrap3/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/OSP/calendar/css/calendar.css">
    <script src='/OSP/js/admin_panel.js'></script>
    <link rel="stylesheet" href='/OSP/css/panel_admin.css' type='text/css'/>
    <link rel='stylesheet' href='/OSP/css/fontello/fontello.css' type='text/css'/>

<<<<<<< HEAD
	
	
    <link rel='stylesheet' href='/OSP/new_calendar/fullcalendar.css' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js'></script>
    <script src='/OSP/new_calendar/fullcalendar.js'></script>
	<script src='/OSP/new_calendar/locale/pl.js'></script>
	
	 <link href='https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css' rel='stylesheet' />
	
=======
    <link rel='stylesheet' href='/OSP/new_calendar/fullcalendar.css' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js'></script>
    <script src='/OSP/new_calendar/fullcalendar.js'></script>
>>>>>>> 1e9b333e383b4c97501e0c43f37e086160029175
    <script>
        `use strict`
        
        /**
            Pełną i dobrze zrobioną dokumentację masz tutaj: https://fullcalendar.io/docs
        **/
        $(document).ready(() => {
<<<<<<< HEAD
      $(`#calendarContainer`).fullCalendar({
		 themeSystem: 'jquery-ui',
     header: {
       
        right: 'today prev,next  year,month,agendaWeek,agendaDay,listWeek'
      },
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      

=======
            $(`#calendarContainer`).fullCalendar({
>>>>>>> 1e9b333e383b4c97501e0c43f37e086160029175
                events: `/OSP/index.php?action=calendar_feed`,
            });

        });
    </script>
</head>
<<<<<<< HEAD
<style>
  #top {
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    font-size: 12px;
    color: #000;
  }

  #calendarContainer {
    max-width: 900px;
	max-hight: 900px;
    margin: 40px auto;
    padding: 0 10px;
  }

</style>
=======
>>>>>>> 1e9b333e383b4c97501e0c43f37e086160029175
<body>
    <button class='back_button'>Wróć</button>
    <div class="container">
    <div class="jumbotron">
        <h1 class="calendar-logo">Kalendarz OSP</h1>
        <p class="calendar-logo">Zbiórki oraz dyżury</p>
    </div>
<<<<<<< HEAD
	
	 
    <div class="row">
        <div id="calendarContainer"></div>
   
	</div>
=======
    <div class="row">
        <div id="calendarContainer"></div>
    </div>
>>>>>>> 1e9b333e383b4c97501e0c43f37e086160029175
</body>
