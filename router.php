<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once('controllers/room.controller.php');

if (!empty($_GET['action'])) {
    $accion = $_GET['action'];
} else {
    $accion = 'rooms';
}

$params = explode('/', $accion);

switch ($params[0]) {
    case 'rooms':
        $roomController = new RoomController();
        $roomController->showAllRooms();
        break;
    default:
        echo ('404 page not found');
        break;
}
