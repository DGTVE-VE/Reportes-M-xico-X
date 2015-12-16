<?php

//print_r($enviaAgradece);

foreach ($enviaAgradece as $value) {
    
    $usuario = $value['email'];
    
///////////********evaluar si encuentra ':'********/////
    $pos = strpos($value['course_id'], ':');
    if ($pos === false) {        
    } else {
        $curso = str_replace('/', '-', $value['course_id']);
    }
///////////********evaluar si encuentra '/'********/////
    $pos = strpos($value['course_id'], '/');
    if ($pos === false) {        
    } else {
        $curso = str_replace('/', '-', $value['course_id']);
    }

    $nombre_fichero = $_SERVER['DOCUMENT_ROOT'] . '/agradecimientos/' . $curso . '.pdf';

    if (file_exists($nombre_fichero)) {
        enviaCorreoAgradecimiento($nombre_fichero, $usuario);
        print_r($nombre_fichero) . '<br>';
        print $usuario;
    } else {
        echo "El fichero $nombre_fichero no existe";
    }
}

//*****Envía archivo adjunto******//


function mail_attachment($file, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {
//    $file = $filename;
    $file_size = filesize($file);
    $handle = fopen($file, "r");
//    print 'file: '.$file.'<br>';
    $content = fread($handle, $file_size);
    fclose($handle);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);
    $header = "From: " . $from_name . " <" . $from_mail . ">\r\n";
    $header .= "Reply-To: " . $replyto . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
    $header .= "This is a multi-part message in MIME format.\r\n";
    $header .= "--" . $uid . "\r\n";
    $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $header .= $message . "\r\n\r\n";
    $header .= "--" . $uid . "\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"agradecimiento.pdf\"\r\n"; // use different content types here
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"agradecimiento.pdf\"\r\n\r\n";
    $header .= $content . "\r\n\r\n";
    $header .= "--" . $uid . "--";
    if (mail($mailto, $subject, "", $header)) {
        echo "mail send ... OK"; // or use booleans here
    } else {
        echo "mail send ... ERROR!";
    }
}

function enviaCorreoAgradecimiento($nombre_fichero, $usuario) {
    $my_path = $nombre_fichero;
    $my_name = "MéxicoX";
    $my_mail = "mexicox@septve.televisioneducativa.gob.mx";
    $my_replyto = "mexicox@televisioneducativa.gob.mx";
    $my_subject = "MéxicoX agradece tu participación.";
    $my_message = "Estimado usuario: Agradecemos tu interés y esfuerzo por ser parte de MéxicoX. Te invitamos a seguir dentro de nuestra comunidad de aprendizaje, utilizando esta plataforma y los diferentes cursos que ofrece de forma gratuita.";
//    $my_message = '<html><body>';
//    $my_message .= '<h2>Estimado usuario:</h2>';
//    $my_message .= '<br>';
//    $my_message .= '<h3>Agradecemos tu interés y esfuerzo por ser parte de MéxicoX. Te invitamos a seguir dentro de nuestra comunidad de aprendizaje, utilizando esta plataforma y los diferentes cursos que ofrece de forma gratuita.</h3>';
//    $my_message .= '</body></html>';
    mail_attachment($my_path, $usuario, $my_mail, $my_name, $my_replyto, $my_subject, $my_message);
}

?>