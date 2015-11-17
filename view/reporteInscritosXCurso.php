<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Total de Alumnos por Curso
            </h1>
        </div>
    </div>
</div>
<div class="row">                           
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-striped inscritos">
            <thead>
            <th>Curso finalizado</th>
            <th>Inscripción</th>
            <th>Nombre del Curso</th>
            <th>Usuarios Inscritos</th>
            
            
<!--            <th>Usuarios Registrados</th>
            <th>Staff</th>-->
            </thead>
            <tbody>
                <?php
                if (!isset($result)){
                    $querySum = DAOFactory::getStudentCourseenrollmentDAO();
                    $result = $querySum->querySumStudent();
                }
                foreach ($result as $row) {

                    $nombre = $row['course_name'];
                    $registrados = $row['Usuarios_registrados'];
//                    $activos = $row['Usuarios_activos'];
//                    $staff = $row['Staff'];
                    $time = strtotime($row['fecha_termino']);
                    $myFormatForView = date("d/m/y", $time);
                    print '<tr>';
                    print '<td>';
                    print $myFormatForView;
                    print '</td>';
                    print '<td>';
                    print $row['estado_inscripcion'];
                    print '</td>';
                    print '<td>';
                    print $nombre;
                    print '</td>';
                    print '<td>';
                    print $registrados;
                    print '</td>';
//                    print '<td>';
//                    print $activos;
//                    print '</td>';
//                    print '<td>';
//                    print $staff;
//                    print '</td>';
                    print '</tr>';
                }
                ?>
            </tbody>
        </table>
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong><?php echo 'Total de Usuarios Registrados:   '. $resultUsuario[0][0]; ?></strong>
                </div>

            </div>
        </div>