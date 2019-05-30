<?php
require_once 'MensajeDB.php';

class MensajeHTML {

    public static function dibujarRecibidos() {
        $login = $_SESSION["login"];
        $mensajes = MensajeDB::leerMensajes($login);

        foreach ($mensajes as $mensaje) {
            ?>
            <form><tr>

                    <td><img height="32" width="32" src="../img/sobre.png"/></td>
                    <td><label><?php echo $mensaje->getAsunto(); ?></label></td>
                    <td><input type="submit" name="accion" value="Ver"/></td>
                    <td><input type="submit" name="accion" value="Eliminar"/></td>
                    <td><input type="hidden" name="id" value="<?php echo $mensaje->getId(); ?>"
                </tr>
            </form><?php
        }
    }

    public static function dibujarEnviados() {
        $login = $_SESSION["login"];
        $mensajes = MensajeDB::leerEnviados($login);

        foreach ($mensajes as $mensaje) {
            ?>
            <tr>
            <form>
                <td><img height="32" width="32" src="../img/sobre.png"/></td>
                <td><label><?php echo $mensaje->getAsunto(); ?></label></td>
                <td><label><?php echo $mensaje->getDestinatario(); ?></label></td>

            </form><?php
        }
    }

    
    public static function dibujarEliminados(){
        $login = $_SESSION["login"];
        $mensajes = MensajeDB::leerEliminados($login);

        foreach ($mensajes as $mensaje) {
            ?>
            <tr>
            <form>
                <td><img height="32" width="32" src="../img/sobre.png"/></td>
                <td><label><?php echo $mensaje->getAsunto(); ?></label></td>
            </form><?php
        }
    }

}
