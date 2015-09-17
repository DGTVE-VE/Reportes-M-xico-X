<form name="frmRecordatorio">
    <!--consultar Correos inactivos-->
    <input type="submit" onclick = "this.form.action = 'admin/consultarCorreosInactivos'" value="Consultar Correos Inactivos" />
    <br>
    <?php 
    if (isset($totalInactivos)){
    $inactivos = unserialize(stripslashes($totalInactivos));   
    $a = 0;
    foreach ($inactivos as $value) {
        $correo = $inactivos[$a]->email;
        $hash = md5(date('Y-m-d H:i:s'));
        //$url = 'televisioneducativa.gob.mx:81/ReportesMX/admin/activarUser?m=' . $correo . 'h=' . $hash;
        $url = 'admin/activarUser/' . $correo . '/' . $hash;
        print '<a href="'.$url.'">'.$url.'</a>';
         print "<br>\n";        
        $a++;
    }}
    ?>
    <!--<input type="submit" onclick = "this.form.action = 'admin/enviarMail1'" value="Enviar mail" />-->
</form>

