<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar usuário</h2>
    <a href="/PB_PHP/Atividade1/produto/listar">Ir para tela Listar</a>

    <form method="POST" action="atualizar?id=<?=$_GET['id']?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="nome" value="<?= htmlspecialchars($produto['nome'])?>" require>
        <input type="number" name="valor" value="<?= htmlspecialchars($produto['valor'])?>" require>
        <input type="number" name="quantidade" value="<?= htmlspecialchars($produto['quantidade'])?>" require>
        <input type="date" name="validade" value="<?= htmlspecialchars($produto['validade'])?>" require>
        <button type="submit">Editar</button>
    </form>
</body>
</html>