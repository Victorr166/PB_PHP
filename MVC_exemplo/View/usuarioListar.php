<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Usuário</h2>
    <a href="/PB_PHP/MVC_exemplo/usuario/telaCadastro"> ir para cadastro </a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach($usuarios as $id => $u): ?>
            <tr>
                <td><?=$u['nome']?></td>
                <td><?=$u['email']?></td>
                <td>
                    <a href="/PB_PHP/MVC_exemplo/usuario/telaEditar?id=<?= $id ?>">
                            editar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
</table>
</body>
</html>