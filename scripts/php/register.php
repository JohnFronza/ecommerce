<?php

include "lib/conexao.php";

if (isset($_POST['register']) &&
    isset($_POST['nome']) &&
    isset($_POST['email']) &&
    isset($_POST['senha'])){

        $sql = "INSERT into contas(nome, email, senha)
        values (:nome, :email, :senha)";

        $consulta = $conn->prepare($sql);
        if($consulta->execute(array(
            "nome" => $_POST["nome"],
            "email" => $_POST["email"],
            "senha" => $_POST["senha"]

        ))){
            header("Location: ../../?page=home");
        }

}