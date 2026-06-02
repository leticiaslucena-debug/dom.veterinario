<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == "admin" && $senha == "123456"){

    echo "Login realizado com sucesso!";

}else{

    echo "Usuário ou senha incorretos.";

}

?>
