<div class="container">
    <div class="row">
        <form method="post" name="frmDescarga">
        <div class="col-md-12">
            <?php                 
                if (isset($url1)){                    
                 ?>
                    <h5>Abrir archivo</h5>
                    <a href="<?php print $url1;?>"> Reporte </a>
                    <!--<input type="submit" name="url" value="<?php// echo $url?>" />-->
                <?php
                }
            ?>
        </div>
        </form>
    </div>
</div>