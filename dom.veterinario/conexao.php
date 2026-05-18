<?php

// 1. Inicializa a sessão antes de qualquer coisa
session_start();

$dbHost = '127.0.0.1';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'banco_dom';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// AÇÃO DE LOGIN
if (isset($_POST['acao_login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM funcionario WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows === 1) {
        $_SESSION['usuario_logado'] = $usuario;
        header("Location: rgatendimento.php"); // Certifique-se de mudar a extensão para .php
        exit();
    } else {
        echo "<script>alert('Usuário ou Senha incorretos!'); window.location.href='login.html';</script>";
    }

// TABELA 1: FUNCIONÁRIO
} elseif (isset($_POST['funcionario'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO funcionario (nome, email, usuario, senha) VALUES ('$nome', '$email', '$usuario', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "<scipt>alert('Funcionário cadastrado com sucesso!;
        window.location.href='login.html';</script>";
    } else {
        echo "Erro ao cadastrar funcionário: " . $conexao->error;
    }

// TABELA 2: ATENDIMENTO
} elseif (isset($_POST['atendimento'])) {
    $idatendimento = $_POST['idatendimento'];
    $cpf_dono = $_POST['cpf_dono'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $tipo_atendimento = $_POST['tipo_atendimento'];
    $crmv = $_POST['crmv'];
    $datas = $_POST['datas'];
    $status = $_POST['statuss'];
    $valor = $_POST['valor'];
    $formapg = $_POST['formapg'];
    $valor_pago = $_POST['valor_pago'];
    $troco = $_POST['troco'];

    // Query unificada em uma única linha string
    $sql = "INSERT INTO atendimento (idatendimento, cpf_dono, especie, raca, tipo_atendimento, crmv, datas, statuss, valor, formapg, valor_pago, troco) VALUES ('$idatendimento', '$cpf_dono', '$especie', '$raca', '$tipo_atendimento', '$crmv', '$datas', '$status', '$valor', '$formapg', '$valor_pago', '$troco')";

     if ($conexao->query($sql) === TRUE) {
        echo "<scipt>alert('Atendimento registrado com sucesso!;
        window.location.href='rgatendimento.php';</script>";
    } else {
        echo "Erro ao cadastrar atendimento: " . $conexao->error;
    }


// TABELA 3: REGISTRO CLÍNICO
} elseif (isset($_POST['registro_clinico'])) {
    $id = $_POST['id'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $queixa = $_POST['queixa'];
    $diagnostico = $_POST['diagnostico'];
    $tratamento = $_POST['tratamento'];

    // Query unificada em uma única linha string
    $sql = "INSERT INTO registro_clinico (id, especie, raca, idade, peso, queixa, diagnostico, tratamento) VALUES ('$id', '$especie', '$raca', '$idade', '$peso', '$queixa', '$diagnostico', '$tratamento')";

     if ($conexao->query($sql) === TRUE) {
        echo "<scipt>alert('Registro clínico salvo com sucesso!;
        window.location.href='rg_clinico.php';</script>";
    } else {
        echo "Erro ao cadastrar registro clínico: " . $conexao->error;
    }

}

$conexao->close();
?>