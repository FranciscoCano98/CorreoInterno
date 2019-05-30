<?php
include 'FCS.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceder</title>
    </head>
    <body>
        <form action="principal.php">
            <fieldset>
                <legend>Identificación</legend>
                <label>Usuario</label>
                <input type="text" name="usuario"/>
                <label>Clave</label>
                <input type="password" name="clave"/>
                <input type="submit" name="accion" value="Acceder"/>
            </fieldset>
        </form>
    </body>
</html>
