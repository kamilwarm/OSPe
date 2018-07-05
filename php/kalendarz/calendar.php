<script src="/OSP/js/libs/jquery-3.2.1.min.js"></script>
<script src='/OSP/js/user_panel.js'></script>
<link rel="stylesheet" href="/OSP/css/panel_user.css" type="text/css" />
<link rel="stylesheet" href="php/kalendarz_admin/css.css">
<link type="text/css" rel="stylesheet" href="php/kalendarz_admin/style.css"/>    
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
<script src="YourJquery source path"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script src="jquery.min.js"></script>
	
  <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>
  
    <?php include_once('functions.php'); ?>
<body>

  <h1 class="test text-center"> KALENDARZ OSP RUDA ŚLĄSKA</h1>
  <center><button class='btn btn-primary back_button'>Cofnij</button></center>
  <!-- Image header -->
 <?php echo getEvents(); ?>
  <!-- Grid -->


    <!-- Blog entries -->

    <div class="container">
	<div class="row">
       <div class="col-sm-6">
	       
			<div class = "test">
				<h2 class="text-center">TEST Kalendarz </h2>
				<h3> dodawanie do bazy danych</h3>
				<form action="?action=testy" method="POST" class="test">
					<label>TESTY DATA WPISUJESZ RRRR-MM-DD: </label>
					<input type="text" name="date" ><br>
					<input type="submit" value="Submit">  
				</form> 
			</div>
		</div>
        
		  <div class="col-sm-6">
		  
			  <div class="w3-container w3-grey">
				  <div id="calendar_div">
					<?php echo getCalender(); ?>
				  </div>
			 </div>
		  </div>
	</div>
</div>
</div>

</body>

















 
