<?php

require_once 'clases/MensajeDB.php';
MensajeDB::eliminarTodos($_SESSION["login"]);
header("Location: principal.php");

