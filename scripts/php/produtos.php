<?php

require "lib/conexao.php";

if (isset($_POST["produtos"])) {
  $sql = "SELECT *
        FROM produtos";
  $consulta = $conn->prepare($sql);
  $consulta->execute();

  $data = $consulta->fetchAll();

  echo json_encode($data);
}