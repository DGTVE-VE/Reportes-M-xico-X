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

    public function descargaArchivo() {
        $curso = $_GET['courseId'];
        $queryCurso = DAOFactory::getCourseNameDAO();
        $resultCurso = $queryCurso->queryByCourseId($curso);
        $cursoId = $resultCurso[0]->courseId;
        $fecha =  date('Y-m-d H:i:s');
        $cursoNombre = $resultCurso[0]->courseName . $fecha;       
        $url = "//tmp/" . $cursoNombre . ".csv";
        $queryDes = DAOFactory::getStudentCourseenrollmentDAO();
        $resultDes = $queryDes->queryDescarga($cursoId, $url);
        $this->download($url);
    }

    private function download($filename) {
        // required for IE, otherwise Content-disposition is ignored
        if (ini_get('zlib.output_compression'))
            ini_set('zlib.output_compression', 'Off');

        // addition by Jorg Weske
        $file_extension = strtolower(substr(strrchr($filename, "."), 1));

        if ($filename == "") {
            echo "<html><title>eLouai's Download Script</title><body>ERROR: download file NOT SPECIFIED. USE force-download.php?file=filepath</body></html>";
            exit;
        } elseif (!file_exists($filename)) {
            echo "<html><title>eLouai's Download Script</title><body>ERROR: File not found. USE force-download.php?file=filepath</body></html>";
            exit;
        };
        $ctype = $this->getContentType($file_extension);
        header("Pragma: public"); // required
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private", false); // required for certain browsers 
        header("Content-Type: $ctype");
        // change, added quotes to allow spaces in filenames, by Rajkumar Singh
        header("Content-Disposition: attachment; filename=\"" . basename($filename) . "\";");
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: " . filesize($filename));
        readfile("$filename");
        exit();
    }
    
    private function getContentType ($file_extension){
        $ctype = "";
        switch ($file_extension) {
            case "pdf": $ctype = "application/pdf";
                break;
            case "exe": $ctype = "application/octet-stream";
                break;
            case "zip": $ctype = "application/zip";
                break;
            case "doc": $ctype = "application/msword";
                break;
            case "xls": $ctype = "application/vnd.ms-excel";
                break;
            case "ppt": $ctype = "application/vnd.ms-powerpoint";
                break;
            case "gif": $ctype = "image/gif";
                break;
            case "png": $ctype = "image/png";
                break;
            case "csv": $ctype = 'text/csv';
                break;
            case "jpeg":
            case "jpg": $ctype = "image/jpg";
                break;
            default: $ctype = "application/force-download";
        }
        return $ctype;
    }

    public function usuariosActivo() {
        $fechaEnd = filter_input(INPUT_POST, 'end');
        $fechaStart = filter_input(INPUT_POST, 'start');
        //$fecha .= ' 00:00:00';// $fecha = $fecha . '...';
        $resultado = DAOFactory::getCoursewareStudentmoduleDAO()->queryUsuariosActivosDesde($fechaStart, $fechaEnd);
//        print_r($resultado);
        $_SESSION[VISTA] = 'view/reporteUsuariosActivo.php';
        include "templates/index.php";
    }

    public function usuariosActivos() {
        $_SESSION[VISTA] = 'view/reporteUsuariosActivos.php';
        include "templates/index.php";
    }
    
   public function encuestaGraficas() {
       $queryPregunta = DAOFactory::getEncuestaDAO();
       $result1 = $queryPregunta->queryGraficaPregunta1("pregunta1");
       $result2 = $queryPregunta->queryGraficaPregunta2("pregunta2");       
       $result3 = $queryPregunta->queryGraficaPregunta1("pregunta3");
       $result4 = $queryPregunta->queryGraficaPregunta1("pregunta4");       
       $result5 = $queryPregunta->queryGraficaPregunta1("pregunta5");       
       $result6r1 = $queryPregunta->queryGraficaPregunta1("pregunta6r1");       
       $result6r2 = $queryPregunta->queryGraficaPregunta1("pregunta6r2");       
       $result6r3 = $queryPregunta->queryGraficaPregunta1("pregunta6r3");       
       $result6r4 = $queryPregunta->queryGraficaPregunta1("pregunta6r4");       
       $result7 = $queryPregunta->queryGraficaPregunta1("pregunta7");       
       $result8 = $queryPregunta->queryGraficaPregunta1("pregunta8");              
       $result9 = $queryPregunta->queryGraficaPregunta2("pregunta9");       
       $result10 = $queryPregunta->queryGraficaPregunta1("pregunta10");              
     
       $totalEncuesta = $queryPregunta->queryTotalEncuesta();
        $_SESSION[VISTA] = 'view/encuestaGraficas.php';
        include "templates/index.php";
    }
    
 
}
