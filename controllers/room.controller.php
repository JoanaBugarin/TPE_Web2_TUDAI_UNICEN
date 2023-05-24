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
    
        if (!empty($rooms))
            $this-> view -> showRooms($rooms);
        else
            $this-> view -> showError('No hay salas');
    }
}