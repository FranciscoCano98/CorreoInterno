<?php

require_once 'clases/UsuarioDB.php';
if (isset($_REQUEST["accion"])) {
    $accion = $_REQUEST["accion"];
    $accion = strtolower($accion);
    $accion = str_replace(" ", "", $accion);
    
    /*switch ($accion){
        /*case "acceder": $exito = UsuarioDB::acceder($_REQUEST["usuario"], $_REQUEST["clave"]);
            if ($exito == 1){
                $url = "principal.php";
            } else {
                $url = "index.php";
            }
            break;
        
        
    }
    header("Location: $url");*/
    }

