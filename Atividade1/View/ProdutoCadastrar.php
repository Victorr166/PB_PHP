<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
</head>
<body>
    <a href="/PB_PHP/Atividade1/produto/listar">Ir para tela Listar</a>
    <form method="POST" action="salvar">
        <input type="text" name="nome" placeholder="Nome do produto" require>
        <input type="number" name="valor" placeholder="Valor do produto" require>
        <input type="text" name="quantidade" placeholder="Quantidade do produto" require>
        <input type="date" name="validade" placeholder="Validade do produto" require>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>