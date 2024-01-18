<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = test_input($_POST["nome"]);
    $email = test_input($_POST["email"]);
    $assunto = test_input($_POST["assunto"]);
    $mensagem = test_input($_POST["mensagem"]);

    // Processar os dados, por exemplo, enviar um e-mail
    $destinatario = "Coloque o seu e-mail aqui para receber as mensagens";
    $assunto_email = "Nova mensagem de contato: $assunto";
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "E-mail: $email\n";
    $corpo_email .= "Assunto: $assunto\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    

    mail($destinatario, $assunto_email, $corpo_email);

    // Redirecionar de volta para a página do formulário
    header("Location: /index.php");
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
