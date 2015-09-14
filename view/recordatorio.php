<form name="frmRecordatorio">
    <!--consultar Correos inactivos-->
    <input type="submit" onclick = "this.form.action = 'admin/consultarCorreosInactivos'" value="Consultar Correos Inactivos" />
    <!--enviar mail-->
    <?php 
    //print $resulInactivos[0]->mail;
    ?>
    <!--<input name="activo" value="0" type="text">-->
    <input type="submit" onclick = "this.form.action = 'admin/enviarMail1'" value="Enviar mail" />
</form>
