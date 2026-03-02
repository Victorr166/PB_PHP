<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Produtos</h2>
    <a href="/PBE/Atividade1/produto/telaCadastro">voltar</a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>quantidade</th>
            <th>Validade</th>
            <th>Ações</th>
        </tr>
        <?php foreach($produtos as $id => $u): ?>
            <tr>
                <td><?=$u['nome']?></td>
                <td><?=$u['valor']?></td>
                <td><?=$u['quantidade']?></td>
                <td><?=$u['validade']?></td>
                <td>próxima aula</td>
                <td>
                
                    <a href="/PB_PHP/Atividade1/produto/telaEditar?id=<?= $id ?>">
                        editar 
                    </a>
                    <a href="/PB_PHP/atividade1/produto/excluir?id=<?= $id ?>">
                        excluir 
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
</table>
</body>
</html>