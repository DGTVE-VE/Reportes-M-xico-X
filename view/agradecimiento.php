<div class="row">
    <div class="col-lg-12">
        <label>Curso</label>
        <form method="POST">
            <select name="course_id" required aria-required="true">
                <?php
                for ($index = 0; $index < count($resultadoCursos); $index++) {
                    $curso = $resultadoCursos[$index]['course_id'];
                    echo "<option value=$curso>$curso</option>";
                }
                ?> 
            </select>
            <input class="btn btn-success" type="submit" onclick = "this.form.action = 'admin/enviaAgradecimiento'" value="Envía Agradecimiento" />
        </form>
    </div>
</div>

