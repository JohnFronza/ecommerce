<?php

require "lib/conexao.php";

if (isset($_POST["produtos"])) {
  $id = $_POST["idcategoria"];
  $sql = "SELECT *
          FROM produtos
          WHERE categoriaid = :id";
  $consulta = $conn->prepare($sql);
  $consulta->execute(["id" => $id]);

  $data = $consulta->fetchAll();

  echo json_encode($data);
}