<?php 
$date = $_POST['date'];
$title = 'dyzur';
$status = 1;
$id = $_SESSION['id'];

$connection = new mysqli("localhost", "root", "", "users") or die($connection->error);
$testy = $connection->prepare("SELECT date,id FROM events WHERE `date`= ? AND `id` = ? ");
$testy->bind_param("si", $date,$id);
$testy->execute();
$query = $testy->get_result();

if ($query->num_rows <= 0){
$stmt = $connection->prepare("INSERT INTO events (date, title,status,id) VALUES (?,?,?,?)") or die($connection->error);
$stmt->bind_param('ssss', $date,$title,$status,$id);
$stmt->execute();
include ("calendar.php");
}
else{
include ("calendar.php");	
echo("Już wpisałeś się na ten dyżur");
}
?>