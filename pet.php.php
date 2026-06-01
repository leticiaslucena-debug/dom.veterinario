<?php

$id_pet = $_POST['id_pet'];
$nome = $_POST['nome'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$peso = $_POST['peso'];
$cor = $_POST['cor'];
$tutor = $_POST['tutor'];
$telefone = $_POST['telefone'];

// Simulação (sem banco ainda)
echo "Pet cadastrado com sucesso!<br>";
echo "Nome: $nome<br>";
echo "Tutor: $tutor<br>";

?>