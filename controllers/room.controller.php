<?php
include_once('models/room.model.php');
include_once('views/room.view.php');
include_once('controllers/theme.controller.php');
include_once('helpers/AuthHelper.php');

class RoomController {
    private $model;
    private $view;
    private $themeController;
    private $authHelper;

    public function __construct() {
        $this->model = new RoomModel();
        $this->view = new RoomView();
        $this->themeController = new ThemeController();
        $this->authHelper = new AuthHelper();
    }

    public function showAllRooms() {
        $rooms = $this-> model-> getRooms();
        $themes =  $this-> themeController->showAllThemes();
        $session = $this->authHelper->thereIsSession();
        if (!empty($rooms)) {
            $this-> view -> showRooms($rooms, count($rooms)-1,  $themes, $session);
        } else {
            $this-> view -> showMsg('danger', 'No hay salas');
        }
    }

    public function showARoom($id) {
        $room = $this-> model-> getRoomById($id);
        if (!empty($room)) {
            $this-> view -> showRoom($room[0]);
        } else {
            $this-> view -> showMsg('danger', 'No hay salas');
        }
    }

    public function showGenericForm($id,$method, $title, $action) {
        $this->authHelper->checkLoggedIn();
        if ($title == 'Nueva Sala de Escape') {
            $themes =  $this-> themeController->showAllThemes();
            $values = "";
            $this-> view -> showForm($method, $title, $action, $values,
            $values, $values, $themes, $values, $values, $values);
        } else {
            $room = $this-> model-> getRoomById($id);
            $nombre = $room[0]->name;
            $descripcion = $room[0]->description;
            $capacidad = $room[0]->capacity;
            $idTematica = $room[0]->theme_id;
            $dificultad = $room[0]->difficulty;
            $tiempo = $room[0]->time;
            $imagen = $room[0]->image;
            $this-> view -> showForm($method, $title, $action, $nombre,
            $descripcion, $capacidad, $idTematica, $dificultad, $tiempo,
            $imagen);
        }
        
    }    

    public function createRoom() {
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['nombre']) && isset($_POST['descripcion'])
        && isset($_POST['capacidad']) && isset($_POST['id_tematica'])
        && isset($_POST['dificultad']) && isset($_POST['tiempo'])
        && isset($_POST['imagen'])) {
            $modifiedRow = $this-> model-> insertRoom($_POST['nombre'],$_POST['descripcion']
            ,$_POST['capacidad'],$_POST['id_tematica'],$_POST['dificultad']
            ,$_POST['tiempo'],$_POST['imagen']);
            if($modifiedRow) {
                $this->view->showMsg('success', '¡CREACIÓN EXITOSA!');
            } else {
                $this->view -> showMsg('danger', '¡CREACIÓN FALLÓ');
            }
        } else {
            $this-> view -> showMsg('danger','Todos los campos son obligatorios');
        }
    }

    public function changeRoom($id) {
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['nombre']) && isset($_POST['descripcion'])
        && isset($_POST['capacidad']) && isset($_POST['id_tematica'])
        && isset($_POST['dificultad']) && isset($_POST['tiempo'])
        && isset($_POST['imagen'])) {
            $modifiedRow = $this-> model-> updateRoom($_POST['nombre'],$_POST['descripcion']
            ,$_POST['capacidad'],$_POST['id_tematica'],$_POST['dificultad']
            ,$_POST['tiempo'],$_POST['imagen'], $id);
            if($modifiedRow) {
                $this->view->showMsg('success', '¡ACTUALIZACIÓN EXITOSA!');
            } else {
                $this->view -> showMsg('danger', '¡ACTUALIZACIÓN FALLÓ');
            }
        } else {
            $this-> view -> showMsg('danger','Todos los campos son obligatorios');
        }
    }

    public function deleteARoom($id) {
        $this->authHelper->checkLoggedIn();
        $this->view-> showMsg('danger', '¿Seguro que desea eliminar esta sala? <a href="../eliminar-sala/'.$id.'/confirmar-borrado" class="btn btn-danger">Confirmar</a>');
    }

    public function confirmDelete($id) {
        $this->authHelper->checkLoggedIn();
        $modifiedRow = $this->model->deleteRoomById($id);
        if($modifiedRow) {
            $this->view->showMsg('success', '¡BORRADO EXITOSO!');
        } else {
            $this->view -> showMsg('danger', '¡BORRADO FALLÓ');
        }
    }

    public function showRoomsByTheme() {
        if(isset($_GET['select-theme'])) {
            $theme = $_GET['select-theme'];
            $rooms = $this-> model ->getRoomsByTheme($theme);
            if (!empty($rooms)) {
                $this-> view -> showRoomsOfTheme($rooms);
            } else {
                $this-> view -> showMsg('danger', '¡No hay salas!');
            }
        }
    }
}