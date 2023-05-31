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

    public function getRoomById($id) {
        $sentencia = $this->db->prepare('SELECT rooms.*, themes.name as theme FROM rooms JOIN themes
        ON rooms.theme_id = themes.id
        WHERE rooms.id = ?');
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
}