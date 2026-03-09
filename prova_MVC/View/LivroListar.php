<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Usuário</h2>
    <a href="/PB_PHP/prova_MVC/livro/telaCadastro"> ir para cadastro </a>
    <table border="1">
        <tr>
            <th>titulo</th>
            <th>autor</th>
            <th>ano_publicacao</th>
            <th>editora</th>
        </tr>
        <?php foreach($livros as $id => $u): ?>
            <tr>
                <td><?=$u['titulo']?></td>
                <td><?=$u['email']?></td>
                <td>
                    <a href="/PB_PHP/prova_MVC/livro/telaEditar?id=<?= $u['ID'] ?>">
                            editar
                    </a>
                    <a href="/PB_PHP/prova_MVC/livro/excluir?id=<?= $u['ID']?>">
                            excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
</table>
</body>
</html>