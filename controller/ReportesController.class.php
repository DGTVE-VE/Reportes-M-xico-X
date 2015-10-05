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
        $cursoNombre = $resultCurso[0]->courseName;
        
        $url = "//tmp/" . $cursoNombre . ".csv";
        $queryDes = DAOFactory::getStudentCourseenrollmentDAO();
        $resultDes = $queryDes->queryDescarga($cursoId, $url);
        $this->download($url);
    }

    private function download($filename) {
//        $filename = $_GET['file'];
//        $filename = '/tmp/' . $filename;
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
        
//        print 'Si llego';
//        print '<br>';
//        print $filename;
//        print '<br>';
//        print $file_extension;
//        print '<br>';
//        print $ctype;
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

}
