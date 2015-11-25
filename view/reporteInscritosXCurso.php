<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-10 col-md-offset-2">
            <h1 class="page-header">
                Total de Alumnos por Curso
            </h1>
        </div>
    </div>

    <div class="row">                  
        <div class="col-md-8 ">
            <h4><input type="checkbox" id="filtro"> Solo abiertos</h4>
        </div>
    </div>    
    <div class="row">       
        <div class="col-md-10 ">
            <table class="table table-hover inscritos">
                <thead>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Inicio Inscripción</th>
                <th>Fin Inscripción</th>            
                <th>Nombre del Curso</th>
                <th>Usuarios Inscritos</th>


<!--            <th>Usuarios Registrados</th>
<th>Staff</th>-->
                </thead>
                <tbody>
                    <?php
                    if (!isset($result)) {
                        $querySum = DAOFactory::getStudentCourseenrollmentDAO();
                        $result = $querySum->querySumStudent();
                    }
                    $registradosTotales = 0;
                    $registradosActivos = 0;
                    foreach ($result as $row) {
                        
                        $activo = (strtotime($row['fin']) - strtotime(date('Y-m-d'))) > 0 ? true : false;                                                        
                        $nombre = $row['course_name'];
                        $registrados = $row['Usuarios_registrados'];
                        $registradosTotales += $registrados;
//                    $activos = $row['Usuarios_activos'];
//                    $staff = $row['Staff'];
                        if ($activo) {
                            $registradosActivos += $registrados;
                            print '<tr class="success">';
                        } else {
                            print '<tr class="danger">';
                        }
                        print '<td>';
                        print $row['inicio'];
                        print '</td>';
                        print '<td>';
                        print $row['fin'];
                        print '</td>';
                        print '<td>';
                        print $row['inicio_inscripcion'];
                        print '</td>';
                        print '<td>';
                        print $row['fin_inscripcion'];
                        print '</td>';
                        print '<td>';
                        print $nombre;
                        print '</td>';
                        print '<td class="text-right">';
                        print number_format ($registrados);
                        print '</td>';
                        print '</tr>';
                    }
                    print '<tr>';
                    print '<td colspan="5" class="text-right"> TOTAL: </td>';
                    print '<td class="text-right" id="total">';
                    print number_format ($registradosTotales);
                    print '</td>';
                    print '<td class="text-right" id="activos">';
                    print number_format ($registradosActivos);
                    print '</td>';
                    print '</tr>';
                    ?>
                </tbody>
            </table>
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong><?php echo 'Total de Usuarios Registrados:   ' .  number_format ($resultUsuario[0][0]); ?></strong>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    //set initial state.
    $('#activos').hide();

    $('#filtro').change(function() {
        if($(this).is(":checked")) {
            $('.danger').hide();
            $('#total').hide();
            $('#activos').show();
        }else{
            $('.danger').show();
            $('#total').show();
            $('#activos').hide();
        }
    });
});
</script>