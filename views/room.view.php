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

    public function showForm($method, $title, $action) {
        $this->smarty->assign('method', $method);
        $this->smarty->assign('title', $title);
        $this->smarty->assign('action', $action);
        $this->smarty->display('templates/genericForm.tpl');
    }
    
    public function showError($msgError) {
        echo $msgError;
    }
}