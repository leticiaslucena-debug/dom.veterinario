<?php

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $host = "localhost";
    $usuario = "root";
    $senhaBanco = "";
    $banco = "petshop";

    $conn = new mysqli($host, $usuario, $senhaBanco, $banco);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $nascimento = $_POST["nascimento"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO tutores
            (nome_completo, cpf, data_nascimento, sexo, email, senha)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssss",
        $nome,
        $cpf,
        $nascimento,
        $sexo,
        $email,
        $senha
    );

    if ($stmt->execute()) {
        $mensagem = "Tutor cadastrado com sucesso!";
    } else {
        $mensagem = "Erro ao cadastrar tutor.";
    }

    $stmt->close();
    $conn->close();
}
?>