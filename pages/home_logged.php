<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
   


    </style>
</head>  
<body>
    <nav class="navbar navbar-expand-lg"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">


                <a href="?page=logout" class="button btn" type="submit" style="margin-right: 15px;">Logout</a>

                </form>
            </div>
        </div>
    </nav>


    <div class="main">
        <div class="janela">
                <!-- Categorias -->
            <div class="categorias">
                <nav class="nav flex-column">
                    <a class="nav-link disabled"><b>Eletrônicos</b></a>
                    <a  class="nav-link active" aria-current="page" href="#">Celulares e Smartphones</a>
                    <a  class="nav-link active" aria-current="page" href="#">TV e vídeo</a>
                    <a class="nav-link disabled"><b>Casa</b></a>
                    <a  class="nav-link active" aria-current="page" href="#">Eletrodomésticos</a>
                    <a  class="nav-link active" aria-current="page" href="#">Móveis e decoração</a>
                </nav>
            </div>

                <!-- Produtos -->
            <div class="produtos">

                <script>
                    $.post(
                    "./scripts/php/produtos.php",
                    {
                        produtos: true,
                    },
                    function (data) {
                        var data = JSON.parse(data);

                        data.forEach((produto) => {
                        produto["preco"] = parseFloat(produto["preco"]);
                        console.log(produto);
                        $(".produtos").append(
                            `
                            <div class="item">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="${produto['img_caminho']}" class="imagem rounded-start" alt="${produto["nome"]}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h1 class="card-title" href="pages/info.php"><b>${produto["nome"]}</b></h1>
                                            <h3>R$ ${produto["valor"]}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `
                        );
                        });
                    }
                    );
                </script>

            </div>
        </div>
    </div>

</body>
</html>