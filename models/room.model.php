<?php

class RoomModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_scape_rooms;charset=utf8', 'root', '');
    }

    public function getRooms() {
        $sql = $this->db->prepare("SELECT * FROM rooms");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
}