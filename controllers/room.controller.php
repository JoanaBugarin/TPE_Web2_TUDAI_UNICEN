<?php
include_once('models/room.model.php');
include_once('views/room.view.php');

class RoomController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new RoomModel();
        $this->view = new RoomView();
    }

    public function showAllRooms() {
        $rooms = $this-> model-> getRooms();
        if (!empty($rooms)) {
            $this-> view -> showRooms($rooms, count($rooms)-1);
        } else {
            $this-> view -> showError('No hay salas');
        }
    }

    public function showARoom($id) {
        $room = $this-> model-> getRoomById($id);
        if (!empty($room))
            $this-> view -> showRoom($room[0]);
        else
            $this-> view -> showError('No hay Salas');
    }

    public function showGenericForm($method, $title, $action) {
        $this-> view -> showForm($method, $title, $action);
    }    

    public function createRoom() {
        if(isset($_POST['nombre']) && isset($_POST['descripcion'])
        && isset($_POST['capacidad']) && isset($_POST['id_tematica'])
        && isset($_POST['dificultad']) && isset($_POST['tiempo'])
        && isset($_POST['imagen'])) {
            $newRoom = $this-> model-> insertRoom($_POST['nombre'],$_POST['descripcion']
            ,$_POST['capacidad'],$_POST['id_tematica'],$_POST['dificultad']
            ,$_POST['tiempo'],$_POST['imagen']);
            if($newRoom) {
                echo $newRoom;
            } else {
                $this->view -> showError('No se pudo insertar la sala');
            }
        } else {
            $this-> view -> showError('Todos los campos son obligatorios');
        }
    }
}