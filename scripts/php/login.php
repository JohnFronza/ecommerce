<?php

include "lib/conexao.php";

if (
    isset($_POST["login"]) &&
    isset($_POST["email"]) &&
    isset($_POST["senha"])
  ) {
    $sql = "SELECT *
          FROM contas
          WHERE email = :email
          AND senha = :senha";
  
    $consulta = $conn->prepare($sql);
    $consulta->execute([
      "email" => $_POST["email"],
      "senha" => $_POST["senha"],
    ]);
  
    $data = $consulta->fetchAll();


    if (count($data) > 0) {
        session_start();

        $_SESSION["nome"] = $data[0]["nome"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["senha"] = $_POST["senha"];
  
    } else {
        echo "usuario inexistente";
    }
  } ?>
  