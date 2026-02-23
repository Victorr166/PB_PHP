<?php

session_start();
require_once "./Model/ProdutoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/ProdutoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $validade = $_POST['validade'];

        $produtos = new Produto($nome, $valor, $quantidade, $validade);
        $produtos->salvar();
        header('Location: /PB_PHP/Atividade1/produto/telaCadastro');
        exit;
    }
    public function listarProdutos(){
        $produtos = Produto::listar();
        echo "<pre>";
        print_r($produtos);
        echo "</pre>";
        require "View/ProdutoListar.php";
    }
}
