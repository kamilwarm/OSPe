
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

    <link rel='stylesheet' href='/OSP/new_calendar/fullcalendar.css' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js'></script>
    <script src='/OSP/new_calendar/fullcalendar.js'></script>
    <script>
        `use strict`
        
        /**
            Pełną i dobrze zrobioną dokumentację masz tutaj: https://fullcalendar.io/docs
        **/
        $(document).ready(() => {
            $(`#calendarContainer`).fullCalendar({
                events: `/OSP/index.php?action=calendar_feed`,
            });

        });
    </script>
</head>
<body>
    <button class='back_button'>Wróć</button>
    <div class="container">
    <div class="jumbotron">
        <h1 class="calendar-logo">Kalendarz OSP</h1>
        <p class="calendar-logo">Zbiórki oraz dyżury</p>
    </div>
    <div class="row">
        <div id="calendarContainer"></div>
    </div>
</body>
