
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="php/kalendarz_admin/css.css">
<link type="text/css" rel="stylesheet" href="php/kalendarz_admin/style.css"/>      
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery.min.js"></script>

<body>
<?php include_once('functions.php'); ?>
<div class="container">
  <h1 class="text-center test"> KALENDARZ OSP RUDA ŚLĄSKA</h1>
  <!-- Image header -->
 <?php echo getEvents(); ?>
  <!-- Grid -->
</div>
  
<div class="fluid-container">
	<div class="col-sm-6">
		<div class = "test">
		<h1> dodawanie do bazy danych</h1>
		<form action="testy.php" method="POST" class="test">
			<label>TESTY DATA WPISUJESZ RRRR-MM-DD: </label>
			<input type="text" name="date" ><br>
			<input type="submit" value="Submit">  
		</form> 
		</div>
	</div>
	<div class="col-sm-6">
	
		<div id="calendar_div">
		 <?php echo getCalender(); ?>
		</div>
		
	</div> 
</div>



  
<script>

  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  }); 
  </script>
</body>

</html> 
















 
