<form method="post" action="">
    <table class="table table-bordered table-striped">
        <thead>
        <th colspan="2" class="text-center"><h4 class="sr">Información Faltante Requerida</h4></th>
        </thead>
        <tr>
            <!--<td><label for="email">Correo electrónico</label></td>-->
            <input class="" hidden="hidden" id="email" type="email" name="email" value="<?php echo $result1[0]['email']; ?>" required="" aria-required="true">
        </tr>
        <?php if (($result1[0]['level_of_education'] === '') || ($result1[0]['level_of_education'] === null)) { ?> 
            <tr>
                <td><label for="education-level">Máximo nivel educativo completado</label></td>
                <td><select id="education-level" name="level_of_education" required aria-required="true">
                        <option value="p">Doctorado</option>
                        <option value="m">Master o postgrado</option>
                        <option value="b">Licenciatura</option>
                        <option value="a">Grado técnico - tecnológico</option>
                        <option value="hs">Bachillerato</option>
                        <option value="jhs">Formación media</option>
                        <option value="el">Primaria</option>
                        <option value="none">Ninguno</option>
                        <option value="other">Otro</option>
                    </select></td>
            </tr>
        <?php } ?>
        <?php if (($result1[0]['gender'] === '') || ($result1[0]['gender'] === null)) { ?>                 
            <tr>
                <td><label for="gender">Género</label></td>
                <td>
                    <select id="gender" name="gender" required aria-required="true">
                        <option value="m">Hombre</option>
                        <option value="f">Mujer</option>
                        <option value="o" selected="">Otro</option>
                    </select>
                </td>
            </tr>
        <?php } ?>
        <?php
        $anio = (trim($result1[0]['year_of_birth']) == false);
        if ($anio) { ?>                          
            <tr>
                <td><label for="yob">Año de nacimiento</label></td>
                <td>        <select id="yob" style="width: 80px;" name="year_of_birth" required aria-required="true">

                        <?php
                        for ($i = 2015; $i >= 1896; $i--) {
                            echo "<option value=$i>$i</option>";
                        }
                        ?> 
                    </select>
                </td>
            </tr>
        <?php } ?>
        <?php if (($result1[0]['country'] === '') || ($result1[0]['country'] === null)) { ?>                   
            <tr>
                <td><label for="country">Estado de la Rep&uacute;blica Mexicana <i>(Si no vives en México, selecciona <b>Extranjero)</b></i></label></td>
                <td>
                    <select id="country" name="country" required aria-required="true">
                        <option value="AG">Aguascalientes</option>
                        <option value="BC">Baja California</option>
                        <option value="BS">Baja California Sur</option>
                        <option value="CC">Campeche</option>
                        <option value="CS">Chiapas</option>
                        <option value="CH">Chihuahua</option>
                        <option value="CL">Coahuila</option>
                        <option value="CM">Colima</option>
                        <option value="DF" selected="">Distrito Federal</option>
                        <option value="DG">Durango</option>
                        <option value="EX">Extranjero</option>
                        <option value="GT">Guanajuato</option>
                        <option value="GR">Guerrero</option>
                        <option value="HG">Hidalgo</option>
                        <option value="JC">Jalisco</option>
                        <option value="MN">Michoacán</option>
                        <option value="MS">Morelos</option>
                        <option value="MC">México</option>
                        <option value="NT">Nayarit</option>
                        <option value="NL">Nuevo León</option>
                        <option value="OC">Oaxaca</option>
                        <option value="PL">Puebla</option>
                        <option value="QT">Querétaro</option>
                        <option value="QR">Quintana Roo</option>
                        <option value="SP">San Luis Potosí</option>
                        <option value="SL">Sinaloa</option>
                        <option value="SR">Sonora</option>
                        <option value="TC">Tabasco</option>
                        <option value="TS">Tamaulipas</option>
                        <option value="TL">Tlaxcala</option>
                        <option value="VZ">Veracruz</option>
                        <option value="YN">Yucatán</option>
                        <option value="ZS">Zacatecas</option>
                    </select>
                </td>
            </tr>
        <?php } ?>
        <?php $domicilio = (trim($result1[0]['mailing_address']) == false);
        if ($domicilio) {?>                          
            <tr>
                <td><label for="address-mailing">Código Postal(Dirección)</label></td>
                <td><textarea id="address-mailing" name="mailing_address" required aria-required="true"></textarea></td>
            </tr>
        <?php } ?>                
            <tr><td colspan="2" class="text-center"><input type="submit" class="btn-info b" onclick = "this.form.action = 'admin/updateUsuario'" value="Actualizar Registro" /></td></tr>
    </table>
</form>