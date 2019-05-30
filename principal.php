<?php
session_start();
?>
<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Correo interno</title>
        <link href="estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="cabecera">            
        </div>
        <form>
        <div id="menuhorizontal">
            <input type="submit" name="accion" value="Cerrar sesion"/>            
        </div>
        <div id="central">
            <div id="menulateral">
                
                    <ul>
                        <li><input type="submit" value="Recibidos" name="accion"/></li>
                        <li><input type="submit" value="Eliminados" name="accion"/></li>
                        <li><input type="submit" value="Enviados" name="accion"/></li>                        
                        <li><input type="submit" value="Nuevo" name="accion"/></li>                                                
                    </ul>
                
            </div>
            </form>
            <div id="contenido">
                <?php
                if (isset($_REQUEST["accion"])) {
                    $accion = $_REQUEST["accion"];
                    $accion = strtolower($accion);
                    $accion = str_replace(" ", "", $accion);
                    $_SESSION["ultimapaginacargada"] = $accion . ".php";
                    require_once "$accion.php";
                }
                ?>
            </div>
        </div>
        <div id="pie">

        </div>
    </body>
</html>
