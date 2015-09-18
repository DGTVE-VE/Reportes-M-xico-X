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
class AdminController {

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
        $titulo = 'Recordatorio MéxicoX';
        $mensaje = '<html><body>';
        $mensaje .= '<h2>Recuerda activar tu cuenta de México X, para hacerlo da click en la siguiente dirección:</h2>';
        $mensaje .= '<br>';
        $mensaje .= '<h3>'.$url.'</h3>';
        $mensaje .= '</body></html>';
        $cabeceras = 'From: mexicox@televisioneducativa.gob.mx' . "\r\n" .
                'Reply-To: mexicox@televisioneducativa.gob.mx' . "\r\n" .
                "MIME-Version: 1.0\r\n". 
                "Content-Type: text/html; charset=UTF-8\r\n".
                'X-Mailer: PHP/' . phpversion();

        //     insertar registro en tabla Correo_activacion
        $daoActiva = DAOFactory::getCorreoActivacionDAO();
        $altaCorreoActivacion = new CorreoActivacion();
        $altaCorreoActivacion->correo = $correo;
        $altaCorreoActivacion->hash = $hash;
        $daoActiva->insert($altaCorreoActivacion);

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
        } else{
            header('Location: http://mx.televisioneducativa.gob.mx/');
        }
        
    }

}
