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

    public function getIdlessRooms() {
        $sql = $this->db->prepare("SELECT * FROM rooms");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function getDataColumns() {
        $sql = $this-> db -> prepare("select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME = 'rooms'");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function getRoomById($id) {
        $sql = $this->db->prepare('SELECT rooms.*, themes.name as theme FROM rooms JOIN themes
        ON rooms.theme_id = themes.id
        WHERE rooms.id = ?');
        $sql->execute([$id]);
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertRoom($name, $description, $capacity, $theme_id, $difficulty, $time, $image) {
        $sql = 'INSERT INTO rooms (name, description, capacity, theme_id, difficulty, time, image) VALUES (:name, :description, :capacity, :theme_id, :difficulty, :time, :image)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':capacity', $capacity);
        $stmt->bindParam(':theme_id', $theme_id);
        $stmt->bindParam(':difficulty', $difficulty);
        $stmt->bindParam(':time', $time);
        $stmt->bindParam(':image', $image);
        $stmt->execute();
        return $stmt->rowCount() > 0;  
    }
}