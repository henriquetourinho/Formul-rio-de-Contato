<!DOCTYPE html>
<html class="no-js" lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Formulário de Contato - Página Inícial</title>
<link rel="stylesheet" href="/sistema/css/estilo.css">
</head>
<body>

  <h2 id="contato">Entre em Contato</h2>

  <form action="sistema/php/contato.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="assunto">Assunto:</label>
    <input type="text" id="assunto" name="assunto" required>

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" required></textarea>

    <input type="submit" value="Enviar">
  </form>

</body>
</html>

