<?php

require_once 'clases/MensajeDB.php';
$id = rand(1, 100);
//No la meto bien para no perder tiempo.
$fecha = "Fecha actual";
MensajeDB::enviar($id, $_SESSION["login"], $_REQUEST["destinatario"], $_REQUEST["asunto"], 
                  $_REQUEST["cuerpo"], $fecha);
header("Location: principal.php");

