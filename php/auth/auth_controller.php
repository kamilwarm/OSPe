<?php
if(!isset($_SESSION)){ 
    session_start();
}
if (isset($_SESSION['online']) && $_SESSION['online'] == 1) {

} else{
  header('Location: index.php');
}
?>
