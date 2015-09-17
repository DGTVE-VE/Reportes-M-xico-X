<?php


header('Content-Type: text/html; charset=utf-8');
require_once 'include_dao.php';
//$_SESSION['config'] = parse_ini_file("config.ini", true);
$querySum = DAOFactory::getStudentCourseenrollmentDAO();
$result = $querySum->querySumStudent();

$queryUsuarios = DAOFactory::getAuthUserDAO();
$resultUsuario = $queryUsuarios->queryTotUser();
//$json = $result;
//var_dump(json_decode($json));
//var_dump(json_decode($json, true));
//
//$result = $querySum->querySumStudent();
//print_r(json_encode($result));
//htmlentities($result ,ENT_QUOTES,'UTF-8');
//$jsonTable = json_encode($result);
//var_dump(json_decode($result));
//print_r($jsonTable);
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

<!-- <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
JSONres = eval(<?php echo json_encode($result); ?>);
alert(JSONres);
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Task', 'Hours per Day'],
['Work',     11],
['Eat',      2],
['Commute',  2],
['Watch TV', 2],
['Sleep',    7]
]);

var options = {
title: 'My Daily Activities',
is3D: true,
};

var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
chart.draw(data, options);
}
</script>-->
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
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i>Reportes</a>
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
