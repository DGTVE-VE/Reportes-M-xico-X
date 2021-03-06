<?php

//****Extrae correo relacionando encuesta con constancia*****//

$queryconstancia = DAOFactory::getConstanciasDAO();
foreach ($resultadoEncuesta as $value) {
    $pass = 'dgtvemxconstancias';
    $method = 'AES-128-CBC';
    $usuario = openssl_decrypt($value['constancia'], $method, $pass);
    $pos = strrpos($usuario, '/');
    $cadenapdf = substr($usuario, $pos + 1);
    $folio = trim($cadenapdf, '.pdf');
//        print $folio;
    if (!empty($folio)) {
        $queryCorreo = $queryconstancia->load($folio);
        $correo = $queryCorreo->correo;
        enviaCorreoConstancia($usuario, $correo);
    }
}

//*****Envía archivo adjunto******//


function mail_attachment($file, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {
//    $file = $path.$filename;
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
    $header .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\r\n"; // use different content types here
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n\r\n";
    $header .= $content . "\r\n\r\n";
    $header .= "--" . $uid . "--";
    if (mail($mailto, $subject, "", $header)) {
        echo "mail send ... OK"; // or use booleans here
    } else {
        echo "mail send ... ERROR!";
    }
}

function enviaCorreoConstancia($usuario, $correo) {
    $my_path = $_SERVER['DOCUMENT_ROOT'] . "/constancia/" . $usuario;
    $my_name = "MéxicoX";
    $my_mail = "mexicox@septve.televisioneducativa.gob.mx";
    $my_replyto = "mexicox@televisioneducativa.gob.mx";
    $my_subject = "Constancia de tu curso en MéxicoX";
    $my_message = "Envío de constancia corregida";
    mail_attachment($my_path, $correo, $my_mail, $my_name, $my_replyto, $my_subject, $my_message);
}

?>