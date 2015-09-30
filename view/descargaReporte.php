<div class="container">
    <div class="row">
        <form method="post" name="frmDescarga">
        <div class="col-md-5">
            <select name="cursoDescarga">
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
            <input type="submit" onclick = "this.form.action = 'reportes/descargaArchivo'" value="Descarga Reporte" />
        </div>
        </form>
    </div>
</div>    