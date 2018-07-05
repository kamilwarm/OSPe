<?php
$login = $_POST['login'];
$name = $_POST['user'];
$last_name = $_POST['last_name'];
$password = $_POST['pass'];

$connection = new mysqli("localhost", "root", "", "users") or die($connection->error);
$stmt = $connection->prepare("INSERT INTO `users` (`login`,`name`, `last_name`, `pass`) VALUES (?,?,?,?)") or die($connection->error);
$hash = password_hash($password, PASSWORD_DEFAULT);
$stmt->bind_param('ssss', $login, $name, $last_name, $hash);
$stmt->execute();
?>
