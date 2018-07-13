<?php
if(!isset($_SESSION)){
    exit;
}

<<<<<<< HEAD
=======
/*
    PRZYKŁAD INTEGRACJI Z BAZĄ:
>>>>>>> 1e9b333e383b4c97501e0c43f37e086160029175

    $connection = new mysqli('localhost', 'root', '', 'calendar') or die($connection->error);
    $stmt = $connection->prepare('SELECT * FROM `calendar_events`') or die($connection->error);
    $stmt->bind_param('s', $login);
    $stmt->execute();
    $query = $stmt->get_result();

    $events = json_encode($query->fetch_all());
<<<<<<< HEAD

/*
=======
*/

>>>>>>> 1e9b333e383b4c97501e0c43f37e086160029175
    $events = [[
        'title' => 'Planowany pożar',
        'start' => '2018-07-12'
    ], [
        'title' => 'Ugaszenie planowanego pożaru',
        'start' => '2018-07-13'
    ]];

    echo json_encode($events);
<<<<<<< HEAD
*/
=======

>>>>>>> 1e9b333e383b4c97501e0c43f37e086160029175
?>
