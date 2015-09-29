<div class="container">
    <div class="row">
        <form method="post" name="frmDescarga">
        <div class="col-md-12">
            <?php                 
                if (isset($url)){                    
                 ?>
                    <h5>Abrir archivo</h5>
                    <input type="submit" name="url" value="<?php echo $url?>" />
                <?php
                }
            ?>
        </div>
        </form>
    </div>
</div>