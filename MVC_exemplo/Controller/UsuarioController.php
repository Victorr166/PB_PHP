<?php

session_start();
require_once "./Model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        session_destroy();
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario->salvar();
        header('Location: /PHP_PBE_2IDS_2025/MVCExemplo/usuario/telaCadastro');
        exit;
    }
    public function listarUsuarios(){
        $usuarios = Usuario::listar();
        echo "<pre>";
        print_r($usuarios);
        echo "</pre>";
        require "View/usuarioListar.php";
    }
}
