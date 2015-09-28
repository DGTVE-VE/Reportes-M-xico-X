<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuarios activos en los cursos
            </h1>
        </div>
    </div>
</div>
<div class="row">                           
    <div class="col-md-6 col-md-offset-3">
        <table class="table table-striped inscritos">
            <thead>
            <th>Nombre del Curso</th>
            <th>Usuarios Inscritos</th>
            </thead>
            <tbody>
                <?php
                foreach ($result as $row) {

                    $nombre = $row['course_name'];
                    $registrados = $row['Usuarios_registrados'];

                    print '<tr>';
                    print '<td>';
                    print $nombre;
                    print '</td>';
                    print '<td>';
                    print $registrados;
                    print '</td>';
                    print '</tr>';
                }
                ?>
            </tbody>
        </table>
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong><?php echo 'Total de Usuarios Registrados:   ' . $resultUsuario[0][0]; ?></strong>
                </div>

            </div>
        </div>
    </div>
</div>