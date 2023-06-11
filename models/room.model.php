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
        $sentencia = 'INSERT INTO rooms (name, description, capacity, theme_id, difficulty, time, image) VALUES (:name, :description, :capacity, :theme_id, :difficulty, :time, :image)';
        $sql = $this->db->prepare($sentencia);
        $sql->bindParam(':name', $name);
        $sql->bindParam(':description', $description);
        $sql->bindParam(':capacity', $capacity);
        $sql->bindParam(':theme_id', $theme_id);
        $sql->bindParam(':difficulty', $difficulty);
        $sql->bindParam(':time', $time);
        $sql->bindParam(':image', $image);
        $sql->execute();
        return $sql->rowCount() > 0;  
    }

    public function updateRoom($name, $desc, $cap, $id_the, $diff, $time, $img, $id) {
        $sentencia = 'UPDATE rooms SET name = :name, description = :description, capacity = :capacity, theme_id = :theme_id, difficulty = :difficulty, time = :time, image = :image WHERE id = :id';
        $sql = $this->db->prepare($sentencia);
        $sql->bindParam(':name', $name);
        $sql->bindParam(':description', $desc);
        $sql->bindParam(':capacity', $cap);
        $sql->bindParam(':theme_id', $id_the);
        $sql->bindParam(':difficulty', $diff);
        $sql->bindParam(':time', $time);
        $sql->bindParam(':image', $img);
        $sql->bindParam(':id', $id);
        $sql->execute();
        return $sql->rowCount() > 0;
    }

    public function deleteRoomById($id) {
        $sql = $this->db->prepare('DELETE FROM rooms WHERE id = ?');
        $sql->execute([$id]);
        return $sql->rowCount() > 0;
    }

    public function getRoomsByTheme($theme_id) {
        $sql = $this->db->prepare('SELECT rooms.*, themes.name as theme FROM rooms JOIN themes
        ON rooms.theme_id = themes.id
        WHERE rooms.theme_id = ?');
        $sql->execute([$theme_id]);
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
}