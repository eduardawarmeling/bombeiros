<?php
    include("conecta.php");

    $email     = $_POST["email"];
    $senha      = $_POST["senha"];

    $comando = $pdo->prepare("INSERT INTO login_bombeiro VALUES('$email','$senha')" );
    $resultado = $comando->execute();

    // Para voltar no formulário:
    header("Location: login.html");
?>