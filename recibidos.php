<?php
require_once 'clases/MensajeHTML.php';
?>
<!-- 
GENERA EL CÓDIGO PHP PARA MOSTRAR LOS MENSAJES CON 
EL FORMATO QUE SE DESCRIBE A CONTINUACIÓN 
EL CÓDIGO HTML ES SOLO UN EJEMPLO PARA QUE TE SIRVA 
DE GUÍA 
-->

<div id="recibidos">
    <table>
        <?php
        MensajeHTML::dibujarRecibidos();
        ?>
    </table>
</div>
