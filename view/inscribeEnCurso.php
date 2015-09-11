
<div>
    <form action="sql/inscribeEnCursoSQL.php" method="post" name="frmInscribeEnCurso">
        <input type="email" name="email"/>
        <button type="submit">Buscar Correo</button>
        <select>
            <?php 
            foreach ($resultEmail as $email) {
                echo '<option value='.$resultEmail->id.'>'.$resultEmail->email.'</option>';
            }
            ?>
            
        </select>
        <input type="email" placeholder="email" >
    </form>
</div>