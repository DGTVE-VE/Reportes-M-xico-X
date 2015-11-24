<?php
$p1 = $_POST["p1"];
$p2 = $_POST["p2"];
$p3 = $_POST["p3"];
$p4 = $_POST["p4"];
$p5 = $_POST["p5"];
$p6op1 = $_POST["p6op1"];
$p6op2 = $_POST["p6op2"];
$p6op3 = $_POST["p6op3"];
$p6op4 = $_POST["p6op4"];
$p7 = $_POST["p7"];
$p8 = $_POST["p8"];
$p9 = $_POST["p9"];
$p10 = $_POST["p10"];
$ruta = $_POST['constancia'];

$servername = "localhost";
$username = "root";
$password = "417624edx";
$dbname = "edxapp";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT constancia FROM encuesta";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    $sql = "INSERT INTO encuesta
            (`pregunta1`,
            `pregunta2`,
            `pregunta3`,
            `pregunta4`,
            `pregunta5`,
            `pregunta6r1`,
            `pregunta6r2`,
            `pregunta6r3`,
            `pregunta6r4`,
            `pregunta7`,
            `pregunta8`,
            `pregunta9`,
            `pregunta10`,
            `constancia`)
            VALUES
            ('$p1', '$p2', '$p3', '$p4', '$p5', '$p6op1', '$p6op2', '$p6op3', '$p6op4', '$p7', '$p8', '$p9', '$p10', '$ruta');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




$conn->close();







$pass = 'dgtvemxconstancias';
$method = 'AES-128-CBC';
$ruta1 = openssl_decrypt($ruta, $method, $pass);
$filename = '/var/www/constancia/' . $ruta1;
download($filename);

function download($filename) {
    // required for IE, otherwise Content-disposition is ignored
    if (ini_get('zlib.output_compression'))
        ini_set('zlib.output_compression', 'Off');

    // addition by Jorg Weske
    $file_extension = strtolower(substr(strrchr($filename, "."), 1));

    if ($filename == "") {
//            echo "<html><title>MéxicoX</title><body>ERROR: descarga de archivo NO ESPECIFICADA.</body></html>";
        exit;
    } elseif (!file_exists($filename)) {
//            echo "<html><title>MéxicoX</title><body>ERROR: Archivo no encontrado.</body></html>";
        exit;
    };
    $ctype = getContentType($file_extension);
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

function getContentType($file_extension) {
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
?>
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>México X</title>

        <!-- Bootstrap Core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            .colortit{color: blue;}
            .header{background-image: url('header_mexicox.png')}
            tr{height: 50px;}
            .tdp6{width: 15%; text-align: center;}
        </style>
    </head>

    <body>
        <nav class="navbar navbar-default header">
            <div class="container">
                <img class="col-md-offset-2" src="LOGO_mexicoX.png">
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">

            <div class="panel panel-default col-md-12 col-lg-12 col-xs-12 ">
                <div class="panel-heading">
                    <h3 class="text-center">¡¡¡ Gracias por tu participación !!!</h3>
                </div>

                <div class="panel-footer colortit"></div>
            </div>
        </form>
    </div>
</body>
</html>
