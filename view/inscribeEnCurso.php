
<div>
    <form method="post" name="frmInscribeEnCurso">
        <input type="email" name="email"/>
        <input type="submit" onclick = "this.form.action = 'admin/consultarCorreo'" value="Buscar Correo" />
        <br><br>    
        <input type="id" hidden="hidden" name="idUser" 
               value="<?php print isset($resultCorreo[0]->id) ? $resultCorreo[0]->id : '' ?>"
               />
        <input type="email" 
               name="correo"
               placeholder="email" 
               value="<?php print isset($resultCorreo[0]->email) ? $resultCorreo[0]->email : '' ?>" >
        <br><br>
        <select name="curso">
            <?php
            foreach ($resultCurso as $value) {
                echo '<option value=' . $value->courseId . '>' . $value->courseName . '</option>';
            }
            ?>            
        </select>
        <br><br>
        <input type="submit" onclick = "this.form.action = 'admin/altaEnCurso'" value="Inscribir" />
    </form>
</div>
