<?php
$connection = new mysqli("localhost", "root", "", "users") or die($connection->error);
$stmt = $connection->prepare("SELECT * FROM `users`") or die($connection->error);
$stmt->execute();
$query = $stmt->get_result();
$users = $query->fetch_all(MYSQLI_ASSOC);
echo(json_encode($users));
?>
