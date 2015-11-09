<div class="row">
    <div class="col-md-4">   
        <table class="table table-striped">
            <thead>
                <tr>
                    <th colspan="4" class="text-center ">Generar constancias por institución</th></tr>
                <tr>
                    <th>Institución</th>
                    <th>Curso</th>                    
                    <th>Periodo</th>                                        
                    <th></th>                                                            
                </tr>                
            </thead>
            <tbody>
                 <?php 
                    foreach ($resultConstancias as $array) {
//                        $url = $array->institucion.$array->curso.$array->folio ;
//                        $descarga = "http://localhost/ReportesMX/constancias/".$array->institucion."/".$array->curso."/".$array->periodo."/".$array->folio.".pdf";
                        echo'<form action="admin/enviarCorreosConstancias" method="post"><tr>';
                        echo '<td>'.$array[0].'</td>';
                        echo '<td>'.$array[1].'</td>';                        
                        echo '<td>'.$array[2].'</td>';                                                
                        echo '<td><input type="submit" class="btn btn-info" value="Enviar Constancias"/></td>';
                        echo '<td><input hidden="hidden" type="text" name="institucion" value="'.$array[0].'"/></td>';                        
                        echo '<td><input hidden="hidden" type="text" name="curso" value="'.$array[1].'"/></td>';
                        echo '<td><input hidden="hidden" type="text" name="periodo" value="'.$array[2].'"/></td>';                        
                        echo'</tr></form>';
                    }
                    ?>                        
            </tbody>
            
        </table>
  
    </div>
    
</div>