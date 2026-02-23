<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Usuário</h2>
    <a href="/PBE/MVC_exemplo/usuario/telaCadastro">
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach($usuarios as $u): ?>
            <tr>
                <td><?=$u['nome']?></td>
                <td><?=$u['email']?></td>
                <td>próxima aula</td>
            </tr>
        <?php endforeach; ?>
</table>
</body>
</html>