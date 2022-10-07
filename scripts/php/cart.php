<?php
include "lib/conexao.php";


session_start();

if(isset($_POST['addtocart'])){
    $id = $_POST['idproduto'];
    //Checa se existe, se não define o carrinho na sesion
    if (isset($_SESSION['carrinho']) == false)
        $_SESSION['carrinho'] = [];

    //Adiciona o id do produto a sesson
    array_push($_SESSION['carrinho'], $id);

    //debug
    echo var_dump($_SESSION['carrinho']);

}

if (isset($_POST['cart_list'])){
    $sql = "SELECT *
            FROM produtos";

    $consulta = $conn->prepare($sql);
    $consulta->execute();
  
    $data = $consulta->fetchAll();
    $ids = $_SESSION["carrinho"];
  
    echo json_encode([$ids, $data]);

}

if(isset($_POST['remove'])){
        array_splice($_SESSION['carrinho'], $_POST['index'], 1);
        echo "tdfgjmn,.;/";
}
