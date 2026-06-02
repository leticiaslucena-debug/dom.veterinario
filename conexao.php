<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == "Dom" && $senha == "dom123"){

    echo "<script>alert('Login realizado com sucesso!'); window.location.href='menu.html';</script>";

}else{

    echo "Usuário ou senha incorretos.";

}

?>
