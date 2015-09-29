<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuarios activos en los cursos
            </h1>
        </div>
    </div>
</div>
<div class="row">   
    <div class="container" id="sandbox-container">
        <form method="post">
            <div class="input-daterange input-group" id="datepicker">

                <span class="input-group-addon">Rango de Fechas</span>
                <input class="input-sm form-control" name="start" id="start" type="text">
                <span class="input-group-addon">y</span>
                <input class="input-sm form-control" name="end" id="end" type="text">
            </div> 
            <br>
            <input type="submit" class="btn btn-info" onclick = "this.form.action = 'reportes/usuariosActivo'" value="Generar Reporte" />
         </form>
    </div>