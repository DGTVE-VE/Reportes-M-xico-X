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
    
    public function descarga() {
        $_SESSION[VISTA] = 'view/descargaReporte.php';
        include "templates/index.php";        
    }
    
    public function descargaArchivo(){
        $curso = $_POST['cursoDescarga'];
        $queryCurso = DAOFactory::getCourseNameDAO();
        $resultCurso = $queryCurso->queryByCourseId($curso);
        $cursoId = $resultCurso[0]->courseId;
        $url1 = "downloads/".$cursoId.".csv";
       $url = "/var/www/ReportesMX/downloads/".$cursoId.".csv";
//        $url = "C:/Users/SMARTINEZ/Desktop/UsuariosEDX.csv";
        $queryDes = DAOFactory::getStudentCourseenrollmentDAO();
        $resultDes = $queryDes->queryDescarga($cursoId, $url);
        
       // if (file_exists($url)) {
            $_SESSION[VISTA] = 'view/descargaArchivo1.php';
            include "templates/index.php"; 
      //  } else {
      //      $_SESSION[VISTA] = 'view/descargaReporte.php';
        //    include "templates/index.php";             
       // }
    }
    
    public function usuariosActivo (){
        $fechaEnd = filter_input(INPUT_POST, 'end');
        $fechaStart = filter_input(INPUT_POST, 'start');
        //$fecha .= ' 00:00:00';// $fecha = $fecha . '...';
        $resultado = DAOFactory::getCoursewareStudentmoduleDAO()->queryUsuariosActivosDesde($fechaStart, $fechaEnd);
//        print_r($resultado);
        $_SESSION[VISTA] = 'view/reporteUsuariosActivo.php';
        include "templates/index.php";
    }
    public function usuariosActivos (){
        $_SESSION[VISTA] = 'view/reporteUsuariosActivos.php';
        include "templates/index.php";
    }
}
