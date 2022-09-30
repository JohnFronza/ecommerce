<head>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
</head>

<?php

function home(){
    if (isset($_SESSION["nome"]) && isset($_SESSION["email"]) && isset($_SESSION["senha"]))
        include "pages/home_logged.php";
    else
        include "pages/home.php";
}


include "scripts/php/lib/conexao.php";
session_start();
$GLOBALS["hidden"] = "hidden";

if (isset($_GET["page"])){
    $link = $_GET["page"];

    if ($link == "home")
        home();
    elseif ($link == "login")
        include "pages/login.html";
        
    elseif ($link == "register")
        include "pages/register.html";

    elseif ($link == "logout") {
        unset($_SESSION["nome"]);
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header("Location: ?page=home");

    }


}
else
    home();



