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

        <title>Reportes México X</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <link href="css/estilo.css" rel="stylesheet">
        
        <!-- Datepicker -->
        <link href="css/datepicker.css" rel="stylesheet" type="text/css">
        <!--<link href="css/datepicker.less" rel="stylesheet" type="text/css">-->
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
                        <a href="reportes/inscritos"><i class="fa fa-fw fa-users"></i>Usuarios Inscritos</a>
                        <a href="reportes/porcentajes"><i class="fa fa-fw fa-list-ol"></i>Por Porcentaje</a>
                        <a href="reportes/descarga"><i class="fa fa-fw fa-download"></i>Descarga Reporte</a>
                        <a href="reportes/usuariosActivos"><i class="fa fa-fw fa-user"></i>Usuarios Activos</a>
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

    <!-- Datepicker -->
    <script src="js/bootstrap-datepicker.js"></script>
</body>

</html>
