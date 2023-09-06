<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/models/usuario.php";


class UsuarioController{
     private $usuarioModel;

     public function __construct()
     {
        $this->usuarioModel = new Usuario();
     }

     public function listarUsuarios(){
        return $this->usuarioModel->listar();
     }

}