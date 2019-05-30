<?php
session_start();
require_once 'clases/UsuarioDB.php';
require_once 'clases/Usuario.php';
$exito = UsuarioDB::acceder($_REQUEST["usuario"], $_REQUEST["clave"]);
            if ($exito == 1){
                $_SESSION["login"] = $_REQUEST["usuario"];
                $_SESSION["clave"] = $_REQUEST["clave"];
                header("Location: principal.php");
            } else {
                header("Location: index.php");
            }

