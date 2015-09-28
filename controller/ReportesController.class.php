<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author Israel
 */
class ReportesController {

    public function inscritos() {
//        require_once 'include_dao.php';
//$_SESSION['config'] = parse_ini_file("config.ini", true);
        $querySum = DAOFactory::getStudentCourseenrollmentDAO();
        $result = $querySum->querySumStudent();

        $queryUsuarios = DAOFactory::getAuthUserDAO();
        $resultUsuario = $queryUsuarios->queryTotUser();
        $_SESSION[VISTA] = 'view/reporteInscritosXCurso.php';
        include "templates/index.php";
    }

    public function porcentajes() {
        $queryUserprofile = DAOFactory::getAuthUserprofileDAO();
//        Reporte de Porcentaje por Genero
        $resultGender = $queryUserprofile->queryPorcentaje();
//        Reporte de Porcentaje por Edad
        $resultEdad = $queryUserprofile->queryUserProfileEdad();
//        Reporte de Porcentaje por Estados
        $resultEstados = $queryUserprofile->queryEstados();
//        Reporte de Porcentaje por Nivel de Estudios
        $resultNivelEstudios = $queryUserprofile->queryNivelEstudios();
        
        $_SESSION[VISTA] = 'view/reportePorcentajes.php';
        include "templates/index.php";
    }
    
    public function usuariosActivos ($fecha = '2015-09-21'){
        $fecha .= ' 00:00:00';
        $resultado = DAOFactory::getCoursewareStudentmoduleDAO()->queryUsuariosActivosDesde($fecha);
        $_SESSION[VISTA] = 'view/reporteUsuariosActivos.php';
        include "templates/index.php";
    }
    

}
