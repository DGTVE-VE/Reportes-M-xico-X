<div class="container">
    <div class="row">
        <div class = "panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center"><strong>Estadísticas de Encuesta</strong></h3>                
                <h3 class="text-center">Total de encuesta registradas: <?php print_r($totalEncuesta[0]['tot']); ?></h3>
            </div>
            <div class = "panel-body">
                <div class="col-md-12">
                    <div class="col-md-5">

                        <?php
                        generaTabla("pregunta1", "1.- ¿Cómo se enteró de los cursos de MéxicoX?", $result1);
                        generaTabla("pregunta2", "2.- ¿Por qué razón decidió tomar un curso en MéxicoX?", $result2);
                        generaTabla("pregunta3", "3.- ¿Cómo considera su experiencia en la plataforma MéxicoX?", $result3);
                        generaTabla("pregunta4", "4.-Con base en su experiencia al tomar el curso en MéxicoX, ¿qué tan satisfecho se siente con el servicio que se le proporcionó?", $result4);
                        generaTabla("pregunta5", "5.- En una escala del 5 al 10, en donde 5 es nada y 10 es mucho, ¿qué tanto considera usted que le ha servido el tema una vez que concluyó su curso en MéxicoX?", $result5);
                        generaTabla("pregunta6r1", "6.1. Información actualizada, sencilla, creíble y concisa", $result6r1);
                        generaTabla("pregunta6r2", "6.2. Apariencia de la plataforma", $result6r2);
                        generaTabla("pregunta6r3", "6.3. Facilidad de navegación", $result6r3);
                        generaTabla("pregunta6r4", "6.4. Rapidez de descarga", $result6r4);
                        generaTabla("pregunta7", "7.- ¿Qué tan probable es que usted tome otro curso en MéxicoX?", $result7);
                        generaTabla("pregunta8", "8.- ¿Usted recomendaría a otras personas los cursos de MéxicoX?", $result8);
                        generaTabla("pregunta9", "9.- A su interés, ¿qué temas le gustaría que se tomarán en cuenta para los próximos cursos de MéxicoX?", $result9);
//                        generaTabla("pregunta10", "10.- Para finalizar, ¿hay algún comentario sobre su experiencia en MéxicoX que no se haya preguntado en esta encuesta? Si es así, por favor, díganos de qué se trata:", $result10);
                        ?>                        
                    </div>                
                    <div class="col-md-7"></div>
                </div>
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr><th>10.- Para finalizar, ¿hay algún comentario sobre su experiencia en MéxicoX que no se haya preguntado en esta encuesta? Si es así, por favor, díganos de qué se trata:</th></tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($result10 as $row) {
                            if (empty($row['pregunta10'])) {
                            continue;
                            }
                            print '<tr>';
                                print '<td>';
                                    print $row['pregunta10'];
                                    print '</td>';
//                                print '<td class="text-right">';
//                                    print number_format($row['total']);
//                                    print '</td>';
//                                print '<td class="text-right">';
//                                    print number_format($row['%'], 2);
//                                    print '%</td>';
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
<?php

function generaTabla($pregunta, $texto, $result) {
    print "<table class=\"table table-striped\">
            <thead>
                <tr><th colspan=\"3\" class=\"text-center\">
                <strong>$texto </strong></th></tr>
                <tr>
                    <th class=\"text-center\">Respuesta</th>
                    <th class=\"text-right\">Total</th>
                    <th class=\"text-right\">%</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($result as $row) {
        if (empty($row[$pregunta])) {
            continue;
        }
        print '<tr>';
        print '<td>';
        print $row[$pregunta];
        print '</td>';
        print '<td class="text-right">';
        print number_format($row['total']);
        print '</td>';
        print '<td class="text-right">';
        print number_format($row['%'], 2);
        print '%</td>';
        print '</tr>';
    }
    print '</tbody></table>';
}
?>