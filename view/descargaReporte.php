<div class="container">
    <div class="row">
        <form method="post" name="frmDescarga">
        <div class="col-md-5">
            <select id="cursoDescarga">
                <?php
                $queryCurso = DAOFactory::getCourseNameDAO();
                $resultCurso = $queryCurso->queryAll();
                foreach ($resultCurso as $value) {
                    echo '<option value=' . $value->courseId . '>' . $value->courseName . '</option>';
                }
                ?>            
            </select>
        </div>
        <div class="col-md-2">
            <button onclick = "sendData ()" value="Descarga Reporte" />
        </div>
        </form>
    </div>
</div>    
<script>
    function sendData (){
        var e = document.getElementById("cursoDescarga");
        var valor = e.options[e.selectedIndex].value;
        
        $.ajax({
            method: "POST",
            url: "reportes/descargaArchivo/",
           data: { cursoDescarga: valor }
        })
        .done(function( msg ) {            
            console.log(msg);         
        });
    }
</script>
    