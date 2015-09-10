<?php

class IndexController {
    public function defaultAction (){
        $_SESSION[VISTA] = 'view/reporteInscritosXCurso.php';
        include "templates/index.php";
    }
    public function login (){
        $_SESSION[VISTA] = 'view/login.php';
        include "templates/index.php";
    }
}
