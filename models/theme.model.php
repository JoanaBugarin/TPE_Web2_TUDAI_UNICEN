<?php

class ThemeModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_scape_rooms;charset=utf8', 'root', '');
    }

    public function getThemes() {
        $sql = $this->db->prepare("SELECT * FROM themes");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function getThemeById($id) {
        $sql = $this->db->prepare('SELECT * FROM themes
        WHERE id = ?');
        $sql->execute([$id]);
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertTheme($name, $classification) {
        $sentencia = 'INSERT INTO themes (name, classification) VALUES (:name, :classification)';
        $sql = $this->db->prepare($sentencia);
        $sql->bindParam(':name', $name);
        $sql->bindParam(':classification', $classification);
        $sql->execute();
        return $sql->rowCount() > 0;  
    }
}