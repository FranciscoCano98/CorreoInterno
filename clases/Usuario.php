<?php
/**
 * Description of Usuario
 *
 * @author franc
 */
class Usuario {
    private $login;
    private $clave;
    private $nombre;
    
    
    function __construct($login, $clave, $nombre) {
        $this->login = $login;
        $this->clave = $clave;
        $this->nombre = $nombre;
    }
    
    function getLogin() {
        return $this->login;
    }

    function getClave() {
        return $this->clave;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }



}
