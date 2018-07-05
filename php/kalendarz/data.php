<?php
$id = $_POST['id'];
$date = $_POST['date'];
$status = $_POST['status'];
$title = 'Dyżur';

$connection = new mysqli("localhost", "root", "", "users") or die($connection->error);
$testy = $connection->prepare("INSERT INTO events (date,title,status,id) VALUES (?,?,?,?)"  or die($connection->error));
$testy->bind_param('ssss', $date,$title,$status,$id);
$testy->execute();
$query = $testy->get_result();

?>