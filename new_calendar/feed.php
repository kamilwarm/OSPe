<?php
if(!isset($_SESSION)){
    exit;
}

/*
    PRZYKŁAD INTEGRACJI Z BAZĄ:

    $connection = new mysqli('localhost', 'root', '', 'calendar') or die($connection->error);
    $stmt = $connection->prepare('SELECT * FROM `calendar_events`') or die($connection->error);
    $stmt->bind_param('s', $login);
    $stmt->execute();
    $query = $stmt->get_result();

    $events = json_encode($query->fetch_all());
*/

    $events = [[
        'title' => 'Planowany pożar',
        'start' => '2018-07-12'
    ], [
        'title' => 'Ugaszenie planowanego pożaru',
        'start' => '2018-07-13'
    ]];

    echo json_encode($events);

?>
