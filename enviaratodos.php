<?php
require_once 'clases/MensajeDB.php';
require_once 'clases/UsuarioDB.php';
$destinatarios = UsuarioDB::leerUsuarios();

foreach ($destinatarios as $destinatario){
$id = rand(1, 100);
$fecha = "Fecha actual";
MensajeDB::enviar($id, $_SESSION["login"], $destinatario->getLogin(), $_REQUEST["asunto"], 
                  $_REQUEST["cuerpo"], $fecha);
}
header("Location: principal.php");


