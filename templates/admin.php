<?php
require_once 'include_dao.php';
$mail = $_POST['mail'];

//echo $email;
$queryCurso = DAOFactory::getCourseNameDAO();
$resultCurso = $queryCurso->queryAll();

print_r($curso);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="http://<?php print $_SESSION[CONFIG]['host']['url']; ?>">
        <!--<meta charset="utf-8">-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Administración México X</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="images/logo.png"/>
                </div>

                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-user-plus"></i>Inscripción en Línea</a>
                    </li>
            </nav>

            <div id="page-wrapper">

                <?php include_once $_SESSION[VISTA]; ?>
                <!--Div that will hold the pie chart-->
                <!--<div class="col-md-12" id="chart_div"></div>-->
            </div>
            <!-- /.container-fluid -->
            <div class="col-md-11" id="piechart_3d" style="width: 900px; height: 500px;"></div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
