<?php
require_once('libs/Smarty.class.php');

class RoomView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function showRooms($rooms) {
        $this->smarty->assign('rooms', $rooms);
        $this->smarty->display('templates/rooms.tpl');
    }
    
    public function showError($msgError) {
        echo $msgError;
    }
}