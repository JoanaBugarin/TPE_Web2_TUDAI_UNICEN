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
    case 'router':
        if (isset($params[1])) {
            switch($params[1]) {
                case 'mostrar-sala':
                    $roomController = new RoomController();
                    $roomController->showARoom($params[2]);
                case 'actualizar-sala':
                    echo ('en proceso');
                    break;
                case 'eliminar-sala':
                    echo ('en proceso');
                    break;
                case 'form-nueva-sala':
                    if (isset($params[2])) {
                        $roomController = new RoomController();
                        $roomController->createRoom();
                    }
                    $roomController = new RoomController();
                    $roomController->showGenericForm('POST', 'Nueva Sala de Escape', '../router/form-nueva-sala/crear-sala');
                    break;
                case 'form-nueva-tematica':
                    echo ('en proceso');
                    break;
                case 'mostrar-tematica':
                    echo ('en proceso');
                    break;
                case 'actualizar-tematica':
                    echo ('en proceso');
                    break;
                case 'eliminar-tematica':
                    echo ('en proceso');
                    break;
            }
        } else {
            echo ('404 page not found');
        }
        break;
    default:
        echo ('404 page not found');
        break;
}
