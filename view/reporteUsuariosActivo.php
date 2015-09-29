<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuarios activos en los cursos
            </h1>
        </div>
    </div>


    <?php
    if (isset($resultado)) {
        ?>
        <div class="col-md-6 col-md-offset-3">
            <table class="table table-striped inscritos">
                <thead>
                <th>Usuarios</th>
                <th>Curso</th>
                <th>Fecha</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultado as $row) {
                        print '<tr>';
                        print '<td>';
                        print $row[0];
                        print '</td>';
                        print '<td>';
                        print $row[1];
                        print '</td>';
                        print '<td>';
                        print $row[2];
                        print '</td>';                        
                        print '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php } else {echo 'No existen registros';} ?>
</div>