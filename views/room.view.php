<?php
require_once('libs/Smarty.class.php');

class RoomView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function showRooms($rooms, $limit) {
        $roomsNoActive = array();
        foreach ($rooms as $room) {
            if ($room == $rooms[0]) {
                $roomActive = $rooms[0];
            } else {
                array_unshift($roomsNoActive, $room);
            }
        };
        $this->smarty->assign('roomActive', $roomActive);
        $this->smarty->assign('rooms', $roomsNoActive);
        $this->smarty->assign('limit', $limit);
        $this->smarty->display('templates/rooms.tpl');
    }

    public function showRoom($room) {
        $this->smarty->assign('room', $room);
        $this->smarty->display('templates/room.tpl');
    }

    public function showForm($method, $title, $action, $nombrePrevio, $descripcionPrevia,
    $capacidadPrevia, $idTematicaPrevia, $dificultadPrevia, $tiempoPrevio, $imagenPrevia) {
        $this->smarty->assign('method', $method);
        $this->smarty->assign('title', $title);
        $this->smarty->assign('action', $action);
        $this->smarty->assign('nombrePrevio', $nombrePrevio);
        $this->smarty->assign('descripcionPrevia', $descripcionPrevia);
        $this->smarty->assign('capacidadPrevia', $capacidadPrevia);
        $this->smarty->assign('idTematicaPrevia', $idTematicaPrevia);
        $this->smarty->assign('dificultadPrevia', $dificultadPrevia);
        $this->smarty->assign('tiempoPrevio', $tiempoPrevio);
        $this->smarty->assign('imagenPrevia', $imagenPrevia);
        $this->smarty->display('templates/genericForm.tpl');
    }

    public function showMsg($tipoAlerta, $mensaje) {
        $this->smarty->assign('tipoAlerta', $tipoAlerta);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/msg.tpl');
    }
    
    public function showError($msgError) {
        echo $msgError;
    }
}