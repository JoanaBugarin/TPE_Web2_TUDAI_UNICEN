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
                case 'form-actualizar-sala':
                    if (isset($params[3])) {
                        $roomController = new RoomController();
                        $roomController->changeRoom($params[2]);
                    }
                    $roomController = new RoomController();
                    $roomController->showGenericForm($params[2],'POST', 'Actualizar Sala de Escape', '../form-actualizar-sala/'.$params[2].'/cambiar-sala');
                    break;
                case 'eliminar-sala':
                    if (isset($params[3])) {
                        $roomController = new RoomController();
                        $roomController->confirmDelete($params[2]);
                    }
                    $roomController = new RoomController();
                    $roomController->deleteARoom($params[2]);
                    break;
                case 'form-nueva-sala':
                    if (isset($params[2])) {
                        $roomController = new RoomController();
                        $roomController->createRoom();
                    }
                    $roomController = new RoomController();
                    $roomController->showGenericForm(null,'POST', 'Nueva Sala de Escape', '../router/form-nueva-sala/crear-sala');
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
