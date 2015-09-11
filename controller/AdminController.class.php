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
    public function inscribirEnCurso (){
        
        $_SESSION[VISTA] = 'view/inscribeEnCurso.php';
        include "templates/admin.php";
    }
    
    public function enviarCorreosActivacion (){
        
        print mail ('j.israel.toledo@gmail.com', 'Correo Activación México X',
              '<html><body>Activate aqui: <a href="#"> Activación </a>');
    }
    
    
}
