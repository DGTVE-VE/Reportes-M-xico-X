<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Porcentaje Genero
            </h1>
        </div>
    </div>
</div>
<div class="row">                           
    <div class="col-md-6 col-md-offset-3">
        <table class="table table-striped colortd">
            <thead>
            <th>Nombre del Curso</th>
            <th>Usuarios Inscritos</th>
<!--            <th>Usuarios Registrados</th>
            <th>Staff</th>-->
            </thead>
            <tbody>
                <?php
                foreach ($result as $row) {

                    $nombre = $row['course_name'];
                    $registrados = $row['Usuarios_registrados'];
//                    $activos = $row['Usuarios_activos'];
//                    $staff = $row['Staff'];

                    print '<tr>';
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