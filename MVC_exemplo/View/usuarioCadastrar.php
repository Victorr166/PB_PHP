<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
</head>
<body>
    <a href="/PB_PHP/MVC_exemplo/usuario/listar">Ir para tela Listar</a>
    <form method="POST" action="salvar">
        <input type="text" name="nome" placeholder="Seu nome" require>
        <input type="email" name="email" placeholder="Seu email" require>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>