  <script src='/OSP/js/admin_panel.js'></script>
  <link rel="stylesheet" href='/OSP/css/panel_admin.css' type='text/css'/>
  <link rel='stylesheet' href='/OSP/css/fontello/fontello.css' type='text/css'/>
</head>
	 <button class='back_button'>Wróć</button>
<body>
<div class="container-fluid">
		<div class="col-xl-12 ">
		<div class="login-form center-block">
		<div class="alert alert-success alert-disactive" id="success" role="alert">
		  <strong><p class="glyphicon glyphicon-exclamation-sign"></p>Użytkownik utworzony!</strong>
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
		   </button>
		</div>
		<div class="alert alert-danger alert-disactive" id="danger" role="alert">
			  <strong><p class="glyphicon glyphicon-exclamation-sign"></p>Błąd użytkownik nie może być utworzony!</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		</div>
		<form>
			<div class="avatar">
				<img src="/OSP/picture/firefighter.png" alt="Strażak">
			</div>
			<h2 class="text-center">Rejestracja nowego członka OSP</h2>  
			
			<div class="form-group">
				<input type="text" class="form-control" id='user_register_login' required size="25" minlength="3" maxlength="25"  title="imie.nazwisko" placeholder="Login" required="required" name='login'>
			</div>
			
			<div class="form-group">
				<input type="text" class="form-control" id='user_register' required size="25" minlength="3" maxlength="25"  placeholder="Imie" required="required" name='user'>
			</div>
			
			<div class="form-group">
				<input type="text" class="form-control" id='user_register_last_name' required size="25" minlength="3" maxlength="25" placeholder="Nazwisko" required="required" name='user_last_name'>
			</div>
			
			<div class="form-group">
				<input type="password"  class="form-control" id='pass_register' placeholder="Hasło" required size="25" minlength="6" maxlength="25" title="Hasło z minimum 6 znaków" required="required" name='pass'>
			</div>    
			
			<div class="form-group">
				<input type="password"  class="form-control"  id='repeat_pass_register' placeholder="Powtórz Hasło"  required size="25" minlength="6" maxlength="25" title="Potwórz Hasło" required="required" name="">  
			</div>        
			</form>
			<div class="form-group">
				<button class="register_button btn btn-primary btn-lg btn-block" type="submit">Rejestruj</button>
			</div>
		
	
	</div>
	</div>
</div>
