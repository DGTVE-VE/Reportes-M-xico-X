<?php

//session_start();
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
class AdminController {

    public function defaultAction() {
        $_SESSION[VISTA] = 'view/inscribeEnCurso.php';
        include "templates/admin.php";
    }

    public function inscribirEnCurso() {
        $_SESSION[VISTA] = 'view/inscribeEnCurso.php';
        include "templates/admin.php";
    }

    public function enviarRecordatorio() {
        $_SESSION[VISTA] = 'view/recordatorio.php';
        include "templates/admin.php";
    }

    public function consultarCorreo() {
        $correo = filter_input(INPUT_POST, 'email');
        $queryEmail = DAOFactory::getAuthUserDAO();
        $resultCorreo = $queryEmail->queryByEmail($correo);
        $_SESSION[VISTA] = 'view/inscribeEnCurso.php';
        include "templates/admin.php";
    }

    public function altaEnCurso() {
        $dao = DAOFactory::getStudentCourseenrollmentDAO();
        $altauser = new StudentCourseenrollment();
        $altauser->userId = filter_input(INPUT_POST, 'idUser');
        $altauser->courseId = filter_input(INPUT_POST, 'curso');
        $altauser->created = date('Y-m-d H:i:s');
        $altauser->isActive = '1';
        $altauser->mode = 'honor';
        $dao->insert($altauser);
        $_SESSION[VISTA] = 'view/inscribeEnCurso.php';
        include "templates/admin.php";
    }

    public function consultarCorreosInactivos() {
//        Consultar correos inactivos
        $activo = 0;
        $dao = DAOFactory::getAuthUserDAO();
        $resultInactivos = $dao->queryByIsActive($activo);
        foreach ($resultInactivos as $value) {
            $correo = $value->email;
            $hash = md5(date('Y-m-d H:i:s'));
            $url = 'http://mx.televisioneducativa.gob.mx:81/ReportesMX/admin/activarUser/' . $correo . '/' . $hash;
            $para = $correo;
            $titulo = 'Recordatorio de activación México X';
            $mensaje = '<html><body>';
            $mensaje .= '<h2>Recuerda activar tu cuenta de México X, ¡los cursos están por comenzar! para hacerlo da click en la siguiente dirección:</h2>';
            $mensaje .= '<br>';
            $mensaje .= '<h3>' . $url . '</h3>';
            $mensaje .= '</body></html>';
            $cabeceras = 'From: mexicox@televisioneducativa.gob.mx' . "\r\n" .
                    'Reply-To: mexicox@televisioneducativa.gob.mx' . "\r\n" .
                    "MIME-Version: 1.0\r\n" .
                    "Content-Type: text/html; charset=UTF-8\r\n" .
                    'X-Mailer: PHP/' . phpversion();

            //     insertar registro en tabla Correo_activacion
            $daoActiva = DAOFactory::getCorreoActivacionDAO();
            $altaCorreoActivacion = new CorreoActivacion();
            $altaCorreoActivacion->correo = $correo;
            $altaCorreoActivacion->hash = $hash;
            $daoActiva->insert($altaCorreoActivacion);
//            print_r($url);
            //enviar mail   
            mail($para, $titulo, $mensaje, $cabeceras);
        }
        $_SESSION[VISTA] = 'view/reporteInscritosXCurso.php';
        include "templates/index.php";
    }

    public function activarUser($correo, $hash) {
        $daoActivado = DAOFactory::getCorreoActivacionDAO();
        $resultActivado = $daoActivado->queryByHashAndCorreo($correo, $hash);
        if ($resultActivado != null) {

//        //update usuario activo
            $daoUsuario = DAOFactory::getAuthUserDAO();
            $consultaUsuario = $daoUsuario->queryByEmail($correo);
            $consultaUsuario[0]->isActive = 1;
            $daoUsuario->update($consultaUsuario[0]);
            //            eliminar el registro del correo_activación
            $daoActivado->deleteByCorreo($correo);
//        mostrar vista de MX
            include "templates/usuarioActivado.php";
        } else {
            header('Location: http://mx.televisioneducativa.gob.mx/');
        }
    }

    public function actualizaUsuario() {
        $email = filter_input(INPUT_GET, 'e');
//        $email = 'pa_babe19@hotmail.com';
        $query1 = DAOFactory::getAuthUserprofileDAO();
        $result1 = $query1->queryUsuario($email);
        // print_r($result1);
        $_SESSION[VISTA] = 'view/actualizaUsuario.php';
        include "templates/superAdmin.php";
    }

    public function revisaUsuario() {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-CSRFToken, Content-Type, Accept");
        $email = filter_input(INPUT_GET, 'e');
//        print $email;
        $query2 = DAOFactory::getAuthUserprofileDAO();
        $result2 = $query2->queryUsuario($email);
//        print_r($result2);
        $correo = $result2[0][0];
        $id = $result2[0][1];
        $genero = $result2[0][2];
        $direccion = $result2[0][3];
        $anio = $result2[0][4];
        $nivel = $result2[0][5];
        $ciudad = $result2[0][6];
        $valor = (trim($genero) == false) ||
                (trim($direccion) == false) ||
                (trim($anio) == false) ||
                (trim($nivel) == false) ||
                (trim($ciudad) == false);
//       var_dump         (trim($genero) == false);
//       var_dump        (trim($direccion) == false);
//       var_dump        (trim($anio) == false);
//       var_dump        (trim($nivel) == false);
//       var_dump        (trim($ciudad) == false);
        print $valor;
    }

    public function updateUsuario() {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-CSRFToken, Content-Type, Accept");
//        //update usuario
        $email = filter_input(INPUT_POST, 'email');
        $daoUsuario = DAOFactory::getAuthUserprofileDAO();
        $users = DAOFactory::getAuthUserDAO()->queryByEmail($email);
        $consultaUsuario = $daoUsuario->queryByUserId($users[0]->id);
        if (filter_input(INPUT_POST, 'gender') != NULL) {
            $consultaUsuario[0]->gender = filter_input(INPUT_POST, 'gender');
        }
        if (isset($_POST['mailing_address'])) {
            $consultaUsuario[0]->mailingAddress = $_POST['mailing_address'];
        }
        if (filter_input(INPUT_POST, 'year_of_birth') != NULL) {
            $consultaUsuario[0]->yearOfBirth = filter_input(INPUT_POST, 'year_of_birth');
        }
        if (filter_input(INPUT_POST, 'level_of_education') != NULL) {
            $consultaUsuario[0]->levelOfEducation = filter_input(INPUT_POST, 'level_of_education');
        }
        if (filter_input(INPUT_POST, 'country') != NULL) {
            $consultaUsuario[0]->country = filter_input(INPUT_POST, 'country');
        }
        $daoUsuario->update($consultaUsuario[0]);
        echo '<script>parent.location.reload()</script>';
    }

    public function constancias() {
        $daoconstancias = DAOFactory::getConstanciasDAO();
        $resultConstancias = $daoconstancias->queryPorCurso();
        $_SESSION[VISTA] = 'view/constancias.php';
        include "templates/admin.php";
    }
    
    public function enviarCorreosConstancias() {
        $curso = filter_input(INPUT_POST, 'curso');
        $institucion = filter_input(INPUT_POST, 'institución');
        $periodo = filter_input(INPUT_POST, 'periodo');
        $daoPorCurso = DAOFactory::getConstanciasDAO();
        $resultPorCurso = $daoPorCurso->queryByCursoPeriodo($curso, $periodo);
        $v = 0;
        $pass = 'dgtvemxconstancias';
        $method = 'AES-128-CBC';
        foreach ($resultPorCurso as $value) {
            $curso = str_replace ('/','-',$resultPorCurso[$v]->curso);                     
            $path1 = $resultPorCurso[$v]->institucion."/".$curso."/".$resultPorCurso[$v]->periodo."/".$resultPorCurso[$v]->folio.".pdf";
            $encrypted = @openssl_encrypt($path1, $method, $pass);
            $path = 'http://mx.televisioneducativa.gob.mx:81/descargaConstancias.php?constancia='.$encrypted;
            $v++;
            $para = $resultPorCurso[$v]->correo;
            $titulo = 'Constancia MéxicoX';
            $mensaje = '<html><body>';
            $mensaje .= '<a href="'. $path .'"></a>';
            $mensaje .= '</body></html>';
            $cabeceras = 'From: mexicox@televisioneducativa.gob.mx' . "\r\n" .
                    'Reply-To: mexicox@televisioneducativa.gob.mx' . "\r\n" .
                    "MIME-Version: 1.0\r\n" .
                    "Content-Type: text/html; charset=UTF-8\r\n" .
                    'X-Mailer: PHP/' . phpversion();
            mail($para, $titulo, $mensaje, $cabeceras);          
            $_SESSION[VISTA] = 'view/constancias.php';
            include "templates/admin.php";
        }
    }

}
