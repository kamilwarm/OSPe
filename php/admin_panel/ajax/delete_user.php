<?php

$login = $_POST['user'];
$connection = new mysqli("localhost", "root", "", "users") or die($connection->error);
$stmt = $connection->prepare("DELETE FROM `users` WHERE `name` = ? ") or die($connection->error);
$stmt->bind_param('s', $login);
$stmt->execute();


?>
