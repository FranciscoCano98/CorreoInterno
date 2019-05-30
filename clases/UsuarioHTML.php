<?php

/**
 * Description of UsuarioHTML
 *
 * @author franc
 */
require_once 'UsuarioDB.php';
class UsuarioHTML {
    public static function selectUsuarios(){
        $usuarios = UsuarioDB::leerUsuarios();
        
        foreach ($usuarios as $usuario){
            ?>
<option value="<?php echo $usuario->getLogin(); ?>"><?php echo $usuario->getLogin(); ?></option>
       <?php }
    }
}
