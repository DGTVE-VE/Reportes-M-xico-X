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
//        print mail('j.israel.toledo@gmail.com', 'Correo Activación México X', '<html><body>Activate aqui: <a href="#"> Activación </a>');
    }

    public function activar($correo, $hash) {
        print $correo;
        print $hash;
        // COnsulta a la tabla de activacion con el correo y el hash
        // Select * from correo_activacion where correo = $correo AND hash = $hash    
        // SI existe el registro activas el usuario auth_user.is_active = 1
        // Muestra pantalla similar a MX con el encabezado
        // Con mensaje has sido activado y el botón que envíe a: http://mx.televisioneducativa.gob.mx/login
    }

    public function consultarCorreo() {
        $correo = filter_input(INPUT_POST, 'email');
        $queryEmail = DAOFactory::getAuthUserDAO();
        $resultCorreo = $queryEmail->queryByEmail($correo);
//        if (!isset($resultCorreo[0]->email)) {
//            print"El correo no existe";
//        }
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
        $totalInactivos = serialize($resultInactivos);
        $inactivos = unserialize(stripslashes($totalInactivos));

        $a = 0;
//        prueba
            $correo = 'soniamartinezctr@gmail.com';
            $hash = md5(date('Y-m-d H:i:s'));
            $url = 'http://mx.televisioneducativa.gob.mx:81/ReportesMX/admin/activarUser/' . $correo . '/' . $hash;
            $para = $correo;
            $titulo = 'Recordatorio MéxicoX';
            $mensaje = 'Recuerda activar tu cuenta de MéxicoX, para hacerlo da clic en la siguiente dirección:         '
                    . $url;
            $cabeceras = 'From: mexicox@televisioneducativa.gob.mx' . "\r\n" .
                    'Reply-To: mexicox@televisioneducativa.gob.mx' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
//     insertar registro en tabla Correo_activacion
        $daoActiva = DAOFactory::getCorreoActivacionDAO();
        $altaCorreoActivacion = new CorreoActivacion();
        $altaCorreoActivacion->correo = $correo;
        $altaCorreoActivacion->hash = $hash;                
        $daoActiva->insert($altaCorreoActivacion);
        print $url;
        mail($para, $titulo, $mensaje, $cabeceras);
            
//        fin prueba
//        
//        foreach ($inactivos as $value) {
//        //alimentar variables
//            $correo = $inactivos[$a]->email;
//            $hash = md5(date('Y-m-d H:i:s'));
//            $url = 'televisioneducativa.gob.mx:81/ReportesMX/admin/activarUser?m=' . $correo . 'h=' . $hash;
//            $para = $correo;
//            $titulo = 'Recordatorio MéxicoX';
//            $mensaje = 'Recuerda activar tu cuenta de MX para hacerlo da clic en la siguiente dirección:'
//                    . $url;
//            $cabeceras = 'From: mexicox@televisioneducativa.gob.mx' . "\r\n" .
//                    'Reply-To: mexicox@televisioneducativa.gob.mx' . "\r\n" .
//                    'X-Mailer: PHP/' . phpversion();
//            
//            
//        //     insertar registro en tabla Correo_activacion
//        $daoActiva = DAOFactory::getCorreoActivacionDAO();
//        $altaCorreoActivacion = new CorreoActivacion();
//        $altaCorreoActivacion->correo = $correo;
//        $altaCorreoActivacion->hash = $hash;                
//        $daoActiva->insert($altaCorreoActivacion);

//         //enviar mail   
//            mail($para, $titulo, $mensaje, $cabeceras);
//            $a++;
//        }
//        $_SESSION[VISTA] = 'view/recordatorio.php';
//        include "templates/admin.php";
    }

    public function activarUser($m, $h) {
//        //update usuario activo
        $daoUsuario = DAOFactory::getAuthUserDAO();
        $consultaUsuario = $daoUsuario->queryByEmail($m);
        $consultaUsuario[0]->isActive = 1;       
        $daoUsuario->update($consultaUsuario[0]);
//        mostrar vista de MX
        include "view/linkactivar.html";
    }

}
