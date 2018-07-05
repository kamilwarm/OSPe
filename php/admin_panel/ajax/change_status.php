<?php
$id = $_POST['id'];
$rights = $_POST['rights'];
$connection = new mysqli("localhost", "root", "", "users") or die($connection->error);
$stmt = $connection->prepare("UPDATE `users` SET `rights` = ? WHERE `id` = ?") or die($connection->error);
$stmt->bind_param("ii", $rights, $id);
$stmt->execute();
?>
