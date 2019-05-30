<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MensajeDB
 *
 * @author franc
 */
require_once 'Conexion.php';
require_once 'Mensaje.php';
class MensajeDB extends Conexion{
    
    public static function leerMensajes ($login){
        $mensajes = [];

        $conexion =parent::conectar();
        
        $sql = "SELECT * FROM BUZON WHERE DESTINATARIO ='$login'";
        $consulta = $conexion->query($sql);
        
        $tupla = $consulta->fetch_array();

        while ($tupla != NULL) {
            $mensaje = new Mensaje($tupla["Id"], $tupla["Remitente"], $tupla["Destinatario"], $tupla["Asunto"], 
                    $tupla["Cuerpo"], $tupla["FechaEnvio"]);
            array_push($mensajes, $mensaje);
            $tupla = $consulta->fetch_assoc();
        }
        $consulta->free();
        return $mensajes;
    }
    
    public static function leerEnviados($login){
        $mensajes = [];

        $conexion =parent::conectar();
        
        $sql = "SELECT * FROM BUZON WHERE REMITENTE ='$login'";
        $consulta = $conexion->query($sql);
        
        $tupla = $consulta->fetch_array();

        while ($tupla != NULL) {
            $mensaje = new Mensaje($tupla["Id"], $tupla["Remitente"], $tupla["Destinatario"], $tupla["Asunto"], 
                    $tupla["Cuerpo"], $tupla["FechaEnvio"]);
            array_push($mensajes, $mensaje);
            $tupla = $consulta->fetch_assoc();
        }
        $consulta->free();
        return $mensajes;
    }
    
    public static function leerEliminados($login){
        $mensajes = [];

        $conexion =parent::conectar();
        
        $sql = "SELECT * FROM ELIMINADOS WHERE DESTINATARIO ='$login'";
        $consulta = $conexion->query($sql);
        
        $tupla = $consulta->fetch_array();

        while ($tupla != NULL) {
            $mensaje = new Mensaje($tupla["Id"], $tupla["Remitente"], $tupla["Destinatario"], $tupla["Asunto"], 
                    $tupla["Cuerpo"], $tupla["FechaEnvio"]);
            array_push($mensajes, $mensaje);
            $tupla = $consulta->fetch_assoc();
        }
        $consulta->free();
        return $mensajes;
    }
    
    

        public static function leerMensaje($id){
        $conexion =parent::conectar();
        
        $sql = "SELECT * FROM BUZON WHERE ID ='$id'";
        $consulta = $conexion->query($sql);
        
        $tupla = $consulta->fetch_array();
        while ($tupla != NULL){
        $mensaje = new Mensaje($tupla["Id"], $tupla["Remitente"], $tupla["Destinatario"], $tupla["Asunto"], 
                    $tupla["Cuerpo"], $tupla["FechaEnvio"]);
        $tupla = $consulta->fetch_array();
        }
        return $mensaje;
    }
    
    public static function enviar($id, $remitente, $destinatario, $asunto, $cuerpo, $fecha){
        $conexion =parent::conectar();
        $sql = "INSERT INTO BUZON VALUES ('$id', '$remitente', '$destinatario', '$asunto',"
                . "'$cuerpo', '$fecha')";
        
        $conexion->query($sql);
        if ($conexion->connect_errno != NULL) {
            echo $conexion->error;
        }
    }
    
    public static function eliminar1($mensaje){
        $id = $mensaje->getId();
        $remitente = $mensaje->getRemitente();
        $destinatario = $mensaje->getDestinatario();
        $asunto = $mensaje->getAsunto();
        $cuerpo = $mensaje->getCuerpo();
        $fecha = $mensaje->getFechaEnvio();
        
        $conexion =parent::conectar();
        $sql = "INSERT INTO ELIMINADOS VALUES ('$id', '$remitente', '$destinatario', '$asunto',"
                . "'$cuerpo', '$fecha')";
        
        $conexion->query($sql);
        if ($conexion->connect_errno != NULL) {
            echo $conexion->error;
        }
    }
    
    public static function eliminar2($mensaje){
        $id = $mensaje->getId();
        $conexion =parent::conectar();
        
        $sql = "DELETE FROM BUZON WHERE Id = '$id'";
        $conexion->query($sql);
        if ($conexion->connect_errno != NULL) {
            echo $conexion->error;
        }
    }
    
    public static function eliminarTodos($login){
        $conexion =parent::conectar();
        
        $sql = "DELETE FROM ELIMINADOS WHERE DESTINATARIO ='$login'";
        $conexion->query($sql);
        if ($conexion->connect_errno != NULL) {
            echo $conexion->error;
        }
    }
}
