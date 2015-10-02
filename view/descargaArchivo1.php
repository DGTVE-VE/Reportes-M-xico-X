<div class="container">
    <div class="row">
        <form method="post" name="frmDescarga">
        <div class="col-md-12">
            <?php                 
                if (isset($url1)){                    
                    //print_r($resultCurso);
                 ?>
                    
                    <h5>Abrir archivo</h5>
                    <a href="<?php print $url;?>"><?php print $url1;?> </a>
                <?php
                }
            ?>
        </div>
        </form>
    </div>
</div>