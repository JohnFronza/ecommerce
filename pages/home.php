<!DOCTYPE html>
<html lang="en">
<he >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
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

                </ul>
                <form class="d-flex" role="search">

                <a href="?page=login" class="button btn" type="submit" style="margin-right: 15px;">Login</a>
                <a href="?page=register" class="button btn" type="submit">Register</a>

                </form>
            </div>
        </div>
    </nav>


    <div class="main">
        <div class="janela">
                <!-- Categorias -->
            <div class="categorias">
                <nav class="nav flex-column">
                    <a id="home" class="nav-link active" ><b>Home</b></a>
                    <a class="nav-link disabled"><b>Eletrônicos</b></a>
                    <a id="cell"  class="nav-link active" aria-current="page">Celulares e Smartphones</a>
                    <a id="tv" class="nav-link active" aria-current="page">TV e vídeo</a>
                    <a class="nav-link disabled"><b>Casa</b></a>
                    <a id="eletro"  class="nav-link active" aria-current="page">Eletrodomésticos</a>
                    <a id="moveis"  class="nav-link active" aria-current="page">Móveis e decoração</a>
                </nav>
            </div>

                <!-- Produtos -->
                <div class="produtos">

<script>

    //show products
    
    function produtos(id){
        $(".produtos").html("")
        $.post(
            "./scripts/php/produtos.php",
            {
                produtos: true,
                idcategoria: id
            },
            function (data) {
                var data = JSON.parse(data);

                data.forEach((produto) => {
                    produto["preco"] = parseFloat(produto["preco"]);
                    console.log(produto);
                    $(".produtos").append(`
                        <div id="${produto["id"]}" class="item">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="${produto['img_caminho']}" class="imagem rounded-start">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h1 class="card-title"><b>${produto["nome"]}</b></h1>
                                    <h3>R$ ${produto["valor"]}</h3>
                                </div>
                            </div>
                        </div>
                        `);
                        
                        //show singular product info
                        $("#" + produto["id"]).click(function(){
                            $(".produtos").html(`
                            <div class="item-info">
                            <img src="${produto['img_caminho']}" class="imagem-info">
                                <div class="mt-5">
                                    <h1><b>${produto["nome"]}</b></h1>
                                    <br>
                                    <h3>R$ ${produto["valor"]}</h3>
                                    <br>
                                    <p readonly>${produto["descricao"]}</p>
                                </div>
                            </div>
                        `)
                    })
                });
            }
            );

        }

        
        
        
                            //Categories
                            $("#home").click(function(){location.href = "?page=home"})
                            $("#cell").click(function(){produtos(1)})
                            $("#tv").click(function(){produtos(2)})
                            $("#eletro").click(function(){produtos(3)})
                            $("#moveis").click(function(){produtos(4)})

</script>



</div>
        </div>
    </div>

</body>
</html>