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
        $activo = 0;
        $dao = DAOFactory::getAuthUserDAO();
        $resultInactivos = $dao->queryByIsActive($activo);       
        $totalInactivos = serialize($resultInactivos);
         $_SESSION[VISTA] = 'view/recordatorio.php';
        include "templates/admin.php";
    }

    public function activarUser($m, $h) {
        
        $daoActiva = DAOFactory::getCorreoActivacionDAO();
//        insertar registro en tabla Correo_activacion
//        $altaCorreoActivacion = new CorreoActivacion();
//        $altaCorreoActivacion->correo = $m;
//        $altaCorreoActivacion->hash = $h;                
//        $daoActiva->insert($altaCorreoActivacion);
        
//        update usuario activo
//        $daoUsuario = DAOFactory::getAuthUserDAO();
//        $consultaUsuario = $daoUsuario->queryByEmail($m);
        
        //print_r($consultaUsuario);
//        $updateUsuario = new AuthUser();
//        $updateUsuario->id = $consultaUsuario[0]->id;
//        $updateUsuario->username = $consultaUsuario[0]->username;
//        $updateUsuario->firstName = $consultaUsuario[0]->firstName;
//        $updateUsuario->lastName = $consultaUsuario[0]->lastName;
//        $updateUsuario->email = $consultaUsuario[0]->email;
//        $updateUsuario->password = $consultaUsuario[0]->password;
//        $updateUsuario->isStaff = $consultaUsuario[0]->isStaff;
//        $updateUsuario->is_active = 1;
//        $updateUsuario->isSuperuser = $consultaUsuario[0]->isSuperuser;
//        $updateUsuario->lastLogin = $consultaUsuario[0]->lastLogin;
//        $updateUsuario->dateJoined = $consultaUsuario[0]->dateJoined;        
//        $daoUsuario->update($updateUsuario);
         
//        mostrar vista de MX
    }

}
