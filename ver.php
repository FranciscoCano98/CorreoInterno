<?php
require_once 'clases/MensajeDB.php';
$mensaje = MensajeDB::leerMensaje($_REQUEST["id"]);
?>

<div id="ver">
    <table>
        <tr>
            <td>Remitente</td>
            <td><input type="text" value="<?php echo $mensaje->getRemitente(); ?>" readonly/></td>
        </tr>
        <tr>
            <td>Asunto</td>
            <td><input type="text" value="<?php echo $mensaje->getAsunto(); ?>" readonly/></td>
        </tr>
        <tr>
            <td colspan="2">Contenido</td>
        </tr>
        <tr>
            <td colspan="2"><textarea readonly rows="10" cols="50"><?php echo $mensaje->getCuerpo(); ?></textarea></td>
        </tr>
    </table>
</div>
