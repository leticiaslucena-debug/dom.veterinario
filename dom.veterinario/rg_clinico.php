<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Veterinário</title>

    <link rel="stylesheet" href="rg_clinico.css">

</head>
<body>

<div class="container">
    <h1>Registro Médico de Consulta Veterinária</h1>

    <div class="section-title">Dados do Animal</div>

   <form action="conexao.php" method="post">
     <label>ID do Paciente</label>
    <input type="text" id="nome" name="id">

    <label>Espécie</label>
    <select id="especie" name="especie">
        <option>Cão</option>
        <option>Gato</option>
        <option>Outro</option>
    </select>

    <label>Raça</label>
    <input type="text" id="raca" name="raca">

    <label>Idade</label>
    <input type="text" id="idade" name="idade">

    <label>Peso</label>
    <input type="text" id="peso" name="peso">

    <div class="section-title">Consulta</div>

    <label>Queixa Principal</label>
    <textarea id="queixa" name="queixa"></textarea>

    <label>Diagnóstico</label>
    <textarea id="diagnostico" name="diagnostico"></textarea>

    <label>Tratamento</label>
    <textarea id="tratamento" name="tratamento"></textarea>

    <button onclick="salvarRegistro()">Salvar Registro</button>

   </form> 
</div>

<script src="rg_clinico.js"></script>

</body>
</html>