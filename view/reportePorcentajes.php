<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Reportes por Porcentaje
            </h1>
        </div>
    </div>
</div>
<div class="bs-example">
    <div class="panel-group" id="accordion">
<!--Reporte porcentaje por Genero-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Genero</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse"> <!--Si se activa la clase in se desactiva el panel inicial-->
                <div class="panel-body">
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Genero</th>
                                    <th>%</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($resultGender as $row) {
                                    $genero = $row[0];
                                    if ($genero === 'f') {
                                        $genero = 'Femenino';
                                    }
                                    if ($genero === 'm') {
                                        $genero = 'Masculino';
                                    }
                                    if ($genero === 'o') {
                                        $genero = 'Otro';
                                    }
                                    $porcentaje = round($row['porcentaje'],2);
                                    print '<tr>';
                                    print '<td>';
                                    print $genero;
                                    print '</td>';
                                    print '<td>';
                                    print $porcentaje;
                                    print '</td>';
                                    print '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
<!--Reporte porcentaje por Nivel de Estudios-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Nivel de Estudios</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table table-striped">
                            <tr>
                                <th>Nivel de Estidio</th>
                                <th>%</th>
                            </tr>
                            <tbody>
                                <?php
                                foreach ($resultNivelEstudios as $row3) {
                                    $nivel = $row3[0];
                                    $porcentaje3 = round($row3['porcentaje'],2);
                                    print '<tr>';
                                    print '<td>';
                                    print $nivel;
                                    print '</td>';
                                    print '<td>';
                                    print $porcentaje3;
                                    print '</td>';
                                    print '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>                       
                </div>
            </div>
        </div>
<!--Reporte porcentaje por Edad-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Edad</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table table-striped">
                            <tr>
                                <th>Edad</th>
                                <th>%</th>
                            </tr>
                            <tbody>
                                <?php
                                foreach ($resultEdad as $row1) {
                                    $edad = $row1[1];
                                    $porcentaje1 = round($row1['porcentaje'],2);
                                    print '<tr>';
                                    print '<td>';
                                    print $edad;
                                    print '</td>';
                                    print '<td>';
                                    print $porcentaje1;
                                    print '</td>';
                                    print '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<!--Reporte porcentaje por Estados de la Republica Mexicana-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Estados de la Republica Mexicana</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table table-striped">
                            <tr>
                                <th>Estado</th>
                                <th>%</th>
                            </tr>
                            <tbody>
                                <?php
                                foreach ($resultEstados as $row2) {
                                    $estado = $row2[0];
                                    $porcentaje2 = round($row2['Porcentaje'],2);
                                    print '<tr>';
                                    print '<td>';
                                    print $estado;
                                    print '</td>';
                                    print '<td>';
                                    print $porcentaje2;
                                    print '</td>';
                                    print '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>


<!--código base para nuevo panel-->
        <!--        <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. What is CSS?</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                        </div>
                    </div>
                </div>-->