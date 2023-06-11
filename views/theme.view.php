<?php
require_once('libs/Smarty.class.php');

class ThemeView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function showThemes($themes) {
        $this->smarty->assign('themes', $themes);
        //$this->smarty->display('templates/rooms.tpl');
    }

    public function showTheme($theme) {
        $this->smarty->assign('theme', $theme);
        $this->smarty->display('templates/theme.tpl');
    }

    public function showMsg($tipoAlerta, $mensaje) {
        $this->smarty->assign('tipoAlerta', $tipoAlerta);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templates/msg.tpl');
    }

    public function showForm($method, $title, $action, $nombrePrevio, $clasificacionPrevia) {
        $this->smarty->assign('method', $method);
        $this->smarty->assign('title', $title);
        $this->smarty->assign('action', $action);
        $this->smarty->assign('nombrePrevio', $nombrePrevio);
        $this->smarty->assign('clasificacionPrevia', $clasificacionPrevia);
        $this->smarty->display('templates/genericThemeForm.tpl');
    }
}