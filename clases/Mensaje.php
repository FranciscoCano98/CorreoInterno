<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mensaje
 *
 * @author franc
 */
class Mensaje {
    private $id;
    private $remitente;
    private $destinatario;
    private $asunto;
    private $cuerpo;
    private $fechaEnvio;
    
    function __construct($id, $remitente, $destinatario, $asunto, $cuerpo, $fechaEnvio) {
        $this->id = $id;
        $this->remitente = $remitente;
        $this->destinatario = $destinatario;
        $this->asunto = $asunto;
        $this->cuerpo = $cuerpo;
        $this->fechaEnvio = $fechaEnvio;
    }
    
    function getId() {
        return $this->id;
    }

    function getRemitente() {
        return $this->remitente;
    }

    function getDestinatario() {
        return $this->destinatario;
    }

    function getAsunto() {
        return $this->asunto;
    }

    function getCuerpo() {
        return $this->cuerpo;
    }

    function getFechaEnvio() {
        return $this->fechaEnvio;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRemitente($remitente) {
        $this->remitente = $remitente;
    }

    function setDestinatario($destinatario) {
        $this->destinatario = $destinatario;
    }

    function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

    function setCuerpo($cuerpo) {
        $this->cuerpo = $cuerpo;
    }

    function setFechaEnvio($fechaEnvio) {
        $this->fechaEnvio = $fechaEnvio;
    }



}
