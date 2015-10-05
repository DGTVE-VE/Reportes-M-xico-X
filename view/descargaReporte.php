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
            <button onclick = "sendData ()"> Descarga Reporte </button>
        </div>
        </form>
        <iframe src="" id="iframe_download" style="visibility:hidden;display:none"> </iframe>        
    </div>
</div>    
<script>
    function sendData (){
        var e = document.getElementById("cursoDescarga");
        var courseId = e.options[e.selectedIndex].value;
        var url = "http://mx.televisioneducativa.gob.mx:81/ReportesMX/reportes/descargaArchivo/?courseId=" + courseId;
        alert (url);
        document.location = url;
//        $('#iframe_download').src=";
//        var e = document.getElementById("cursoDescarga");
//        var valor = e.options[e.selectedIndex].value;
//        alert (valor);
//        $.ajax({
//            method: "POST",
//            url: "reportes/descargaArchivo/",
//           data: { cursoDescarga: valor }
//        })
//        .done(function( msg ) {            
//            console.log(msg);         
//        });
    }
</script>
    