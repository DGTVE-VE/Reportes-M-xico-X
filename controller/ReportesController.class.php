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
        //$url = "C:/Users/SMARTINEZ/Desktop/".$cursoId.".csv";
        $url = "C:/Users/SMARTINEZ/Desktop/UsuariosEDX.csv";
//        $queryDes = DAOFactory::getStudentCourseenrollmentDAO();
//        $resultDes = $queryDes->queryDescarga($cursoId, $url);
        
        if (file_exists($url)) {
            echo 'Descargue el archivo:';
            $_SESSION[VISTA] = 'view/descargaArchivo.php';
            include "templates/index.php"; 
        } else {
            echo "El fichero no se podrá descargar";
            $_SESSION[VISTA] = 'view/descargaArchivo.php';
            include "templates/index.php";             
        }
    }

}
