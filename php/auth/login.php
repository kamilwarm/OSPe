<?php
if(!isset($_SESSION)){ 
    session_start();
	$login = $_POST['login'];
	$pass = $_POST['password'];

}

if(isset($login) && isset($pass)){
  $connection = new mysqli("localhost", "root", "", "users") or die($connection->error);
  $stmt = $connection->prepare("SELECT * FROM `users` WHERE `login` = ?") or die($connection->error);
  $stmt->bind_param("s", $login);
  $stmt->execute();
  $query = $stmt->get_result();

  if ($query->num_rows <= 0){
	echo("brak użytkownika");
  } else{
    $user = $query->fetch_all(MYSQLI_ASSOC)[0];
    if (password_verify($pass, $user['pass'])) {
      $_SESSION['id'] = $user['id'];
      $_SESSION['online'] = 1;
      $_SESSION['admin'] = $user['admin'];
      if($_SESSION['admin'] == 1){
        header("Location: /OSP/?action=admin_panel");
      } else{
        header("Location: /OSP/?action=user_panel");
      }
    } else {
      echo("niepoprawne hasło");
    }
  }
  exit;
}
?>
<body>
<div class="container-fluid">
	<div class="col-xl-12 ">
	<div class="login-form center-block">
		<form action="/OSP/php/auth/login.php" method="POST">
			<div class="avatar">
				<img src="/OSP/picture/firefighter.png" alt="Strażak">
			</div>
			<h2 class="text-center">Zaloguj się</h2>   
			<div class="form-group">
				<input type="text" class="form-control" name="login" id="user_login" placeholder="Użytkownik" required="required">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" id="pass_login" placeholder="Hasło" required="required">
			</div>        
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg btn-block">Loguj</button>
			</div>
		</form>
		<h5 class="text-center color-white">System dostępny wyłącznie dla zarejestrowanych użytkowników</h5>
	</div>
	</div>
</div>

