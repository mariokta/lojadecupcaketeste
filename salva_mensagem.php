<?php
include("salva_mensagem.php");

$nome = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['message'];

// Verifica se o e-mail já existe na tabela
$verifica_email = "SELECT * FROM contato_msg WHERE email = '$email'";
$result_verifica_email = mysqli_query($conexao, $verifica_email);

if (!$result_verifica_email) {
    // Tratamento de erro para a consulta SELECT
    echo "Erro na consulta: " . mysqli_error($conexao);
} else {
    if (mysqli_num_rows($result_verifica_email) > 0) {
        echo "Erro: E-mail já cadastrado.";
    } else {
        // Se o e-mail não existe, realiza a inserção
        $sql = "INSERT INTO contato_msg(nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

        if(mysqli_query($conexao, $sql)){
            echo "Mensagem enviada com sucesso";
        } else {
            echo "Erro na inserção: " . mysqli_error($conexao);
        }
    }
}
mysqli_close($conexao);
?>