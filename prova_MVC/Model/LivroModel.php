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

    public static function listar(){
        $pdo = Database::conectar();
        $stmt = $pdo ->query("SELECT * FROM livro");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        public static function buscar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("SELECT * FROM livro WHERE id = :id");
        $stmt->execute(['id'-> $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("UPDATE livros SET titulo, :autor, :ano_publicacao, :editora WHERE id :id");
        $stmt->execute(['id' => $id, 'titulo' => $this->titulo, 'autor' => $this->autor, 'ano_publicacaov' => $this->ano_publicacaor]);
        }
    

    public function telaEditar(){
        $usuario - Usuario::buscar($_GET['id']);
        require 'View/usuarioEditar.php';
    }

    public static function excluir($id){
        if(isset($_SESSION['livros'][$id])){  
            unset($_SESSION['livros'][$id]); 
            
        }
    }
}


