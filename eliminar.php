<?php

require_once 'clases/MensajeDB.php';
$mensaje = MensajeDB::leerMensaje($_REQUEST["id"]);
MensajeDB::eliminar1($mensaje);
MensajeDB::eliminar2($mensaje);
header("Location: principal.php");

