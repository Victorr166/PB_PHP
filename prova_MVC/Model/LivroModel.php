<?php 

require_once "./database/Database.php";

class Usuario{
    private $titulo;
    private $autor;
    private $ano_publicacao;
    private $editora;

    public function __construct($titulo, $autor, $ano_publicacao, $editora){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_publicacao = $ano_publicacao;
        $this->editora = $editora;

    }

    public function salvar(){
        $pdo = Database::conectar();
        $sql = "INSERT INTO livro(titulo, autor, ano_publicacao, editora) VALUES (:titulo, :autor, :ano_publicacao, :editora)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['titulo' => $this->titulo, 'autor' => $this->autor, 'ano_publicacao' =>$this->ano_publicacao, 'editora' =>$this->editora]);
        
    }
}
