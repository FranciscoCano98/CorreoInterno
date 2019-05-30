<?php
require_once 'clases/UsuarioHTML.php';
?>

<div id="ver">
    <form>
    <table>
        <tr>
            <td>Destinatario</td>
            <td>
                <select name="destinatario">
                <?php
                UsuarioHTML::selectUsuarios();
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Asunto</td>
            <td><input type="text" name="asunto"/></td>
        </tr>
        <tr>
            <td colspan="2">Contenido</td>
        </tr>
        <tr>
            <td colspan="2"><textarea rows="10" cols="50" name="cuerpo"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="accion" value="Enviar"/></td>
            <td><input type="submit" name="accion" value="Enviar a todos"/></td>
        </tr>
    </table>
    </form>
</div>
