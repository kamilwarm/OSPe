<?php
session_start();

/* AJAX ROUTES */
if ($_GET['action'] == "calendar_feed"){
  include ("php/auth/auth_controller.php");
  include ("new_calendar/feed.php");
  exit;
}

include ("php/global/header.php");

if(!isset($_GET['action'])){
  include ("php/auth/login.php");

//ADMIN panel
} else if ($_SESSION['admin'] == 1 && $_GET['action'] == "admin_panel"){
  include ("php/auth/auth_controller.php");
  include ("php/admin_panel/panel.php");
}
else if ($_SESSION['admin'] == 1 && $_GET['action'] == "calendar_admin"){
  include ("php/auth/auth_controller.php");
  include ("new_calendar/index.php");
}
else if ($_SESSION['admin'] == 1 && $_GET['action'] == "add_user"){
  include ("php/auth/auth_controller.php");
  include ("php/admin_panel/add_user_panel.php");
}
else if ($_SESSION['admin'] == 1 && $_GET['action'] == "user"){
  include ("php/auth/auth_controller.php");
  include ("php/admin_panel/user.php");
}
else if ($_SESSION['admin'] == 1 && $_GET['action'] == "table"){
  include ("php/auth/auth_controller.php");
  include ("php/admin_panel/table.php");
}
else if ($_SESSION['admin'] == 1 && $_GET['action'] == "delete_user"){
  include ("php/auth/auth_controller.php");
  include ("php/admin_panel/delete_user.php");
}

//USER  PANEL
 else if ($_GET['action'] == "user_panel"){
  include ("php/auth/auth_controller.php");
  include ("php/user_panel/panel.php");

} else if ($_GET['action'] == "calendar_user"){
  include ("php/auth/auth_controller.php");
  include ("php/kalendarz/calendar.php");

} else if ($_GET['action'] == "user_panel1"){
  include ("php/auth/auth_controller.php");
  include ("php/user_panel/panel1.php");

} else if ($_GET['action'] == "testy"){
  include ("php/auth/auth_controller.php");
  include ("php/kalendarz/testy.php");
}

//WYLOGOWANIE//
else if ($_GET['action'] == "logout"){
  include ("php/auth/auth_controller.php");
  include ("php/global/logout.php");
}
else {
  include ("php/auth/login.php");
}

include("php/global/footer.php");
?>
