<?php
include_once('models/theme.model.php');
include_once('views/theme.view.php');
include_once('controllers/room.controller.php');

class ThemeController {
    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new ThemeModel();
        $this->view = new ThemeView();
        $this->authHelper = new AuthHelper();
    }

    public function showAllThemes() {
        $themes = $this-> model-> getThemes();
        if (!empty($themes)) {
            return $themes;
        }
    }

    public function showATheme($id) {
        $theme = $this-> model-> getThemeById($id);
        if (!empty($theme)) {
            $this-> view -> showTheme($theme[0]);
        } else {
            $this-> view -> showMsg('danger', 'No hay sala con ese id');
        }
    }

    public function showGenericThemeForm($id,$method, $title, $action) {
        $this->authHelper->checkLoggedIn();
        if ($title == 'Nueva Temática') {
            $values = "";
            $this-> view -> showForm($method, $title, $action, $values,
            $values);
        } else {
            $room = $this-> model-> getThemeById($id);
            $nombre = $room[0]->name;
            $clasificacion = $room[0]->classification;
            $this-> view -> showForm($method, $title, $action, $nombre,
            $clasificacion);
        }
    }

    public function createTheme() {
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['nombre']) && isset($_POST['clasificacion'])) {
            $modifiedRow = $this-> model-> insertTheme($_POST['nombre'],$_POST['clasificacion']);
            if($modifiedRow) {
                $this->view->showMsg('success', '¡CREACIÓN EXITOSA!');
            } else {
                $this->view -> showMsg('danger', '¡CREACIÓN FALLÓ');
            }
        } else {
            $this-> view -> showMsg('danger','Todos los campos son obligatorios');
        }
    }

    public function changeTheme($id) {
        $this->authHelper->checkLoggedIn();
        if(isset($_POST['nombre']) && isset($_POST['clasificacion'])) {
            $modifiedRow = $this-> model-> updateTheme($_POST['nombre'],$_POST['clasificacion'], $id);
            if($modifiedRow) {
                $this->view->showMsg('success', '¡ACTUALIZACIÓN EXITOSA!');
            } else {
                $this->view -> showMsg('danger', '¡ACTUALIZACIÓN FALLÓ');
            }
        } else {
            $this-> view -> showMsg('danger','Todos los campos son obligatorios');
        }
    }

    public function deleteATheme($id) {
        $this->authHelper->checkLoggedIn();
        $this->view-> showMsg('danger', '¿Seguro que desea eliminar esta temática? <a href="../eliminar-tematica/'.$id.'/confirmar-borrado" class="btn btn-danger">Confirmar</a>');
        $this->showATheme($id);
    }

    public function confirmDelete($id) {
        $this->authHelper->checkLoggedIn();
        $modifiedRow = $this->model->deleteThemeById($id);
        if($modifiedRow) {
            $this->view->showMsg('success', '¡BORRADO EXITOSO!');
        } else {
            $this->view -> showMsg('danger', '¡BORRADO FALLÓ');
        }
    }
}