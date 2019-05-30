<?php

require_once 'Conexion.php';
require_once 'Usuario.php';
class UsuarioDB extends Conexion{
    
    public static function acceder ($login, $clave){
        $exito = NULL;
        $conexion = parent::conectar();
        
        $sql = "SELECT * FROM USUARIOS WHERE LOGIN = '$login' AND CLAVE = '$clave'";
        $consulta = $conexion->query($sql);
        $tupla = $consulta->fetch_array();
        $fila = mysqli_num_rows($consulta);
        
        if ($fila == 1){
            $exito = 1;
        } else {
            $exito = 0;
        }
        return $exito;
    }
    
    public static function getNombre($login){
        $conexion = parent::conectar();
        
        $sql = "SELECT NOMBRE FROM USUARIOS WHERE LOGIN = '$login'";
        $consulta = $conexion->query($sql);
        $tupla = $consulta->fetch_array();
        $consulta->free();
        return $tupla["Nombre"];
    }
    
    public static function leerUsuarios(){
        $usuarios = [];

        $conexion =parent::conectar();
        
        $sql = "SELECT * FROM USUARIOS";
        $consulta = $conexion->query($sql);
        
        $tupla = $consulta->fetch_array();

        while ($tupla != NULL) {
            $usuario = new Usuario($tupla["login"], $tupla["clave"], $tupla["Nombre"]);
            array_push($usuarios, $usuario);
            $tupla = $consulta->fetch_assoc();
        }
        $consulta->free();
        return $usuarios;
    }
    
}
