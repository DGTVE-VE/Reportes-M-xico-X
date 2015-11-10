<?php
$ruta = $_GET['constancia'];
$pass = 'dgtvemxconstancias';
$method = 'AES-128-CBC';
//$ruta1 = openssl_decrypt($ruta, $method, $pass);
$filename = 'constancia/'.$ruta;
print $filename;
download($filename);
function download($filename) {
        // required for IE, otherwise Content-disposition is ignored
        if (ini_get('zlib.output_compression'))
            ini_set('zlib.output_compression', 'Off');

        // addition by Jorg Weske
        $file_extension = strtolower(substr(strrchr($filename, "."), 1));

        if ($filename == "") {
            echo "<html><title>MéxicoX</title><body>ERROR: descarga de archivo NO ESPECIFICADA.</body></html>";
            exit;
        } elseif (!file_exists($filename)) {
            echo "<html><title>MéxicoX</title><body>ERROR: Archivo no encontrado.</body></html>";
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
    
    function getContentType ($file_extension){
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

