<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Editar</h2>
    <a href="/PB_PHP/prova_MVC/livro/listar">Ir para tela listar</a>

    <form method="POST" action="atualizar?id=<?$_GE['id']?>">
       <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
       <input type="text" name="titulo" value="<?= htmlspecialchars($livro['titulo'])?>" require>
       <input type="text" name="autor" value="<?= htmlspecialchars($livro['autor'])?>" require>
       <input type="text" name="ano_publicacao" value="<?= htmlspecialchars($livro['ano_publicacao'])?>" require>
       <input type="text" name="editora" value="<?= htmlspecialchars($livro['editora'])?>" require>
</body>
</html>