<!doctype html>
<html>
<head>
    <title>MCZ SHOES</title>

    <!-- CSS -->
    <meta charset="utf-8">
    <link href="/boots/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/StyleJumb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="/img/incone-para-projeto.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<nav class="navbar navbar-expand-xl fixed-top bg-dark navbar-dark">
    <a href="principal" class="navbar-brand"><img src="/img/mcz ok branco.png" style="margin-left: 2%; width: 10%;"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- links -->
    <div id="menu" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-md-auto">

            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="categorias" id="menu_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                <div class="dropdown-menu">
                    <a href="tenisdecorrida" class="dropdown-item">Tênis de corrida</a>
                    <div class="dropdown-divider"></div>
                    <a href="skateesurf" class="dropdown-item">Skate e Surf</a>
                    <div class="dropdown-divider"></div>
                    <a href="basquete" class="dropdown-item">Basquete</a>
                    <div class="dropdown-divider"></div>
                    <a href="artesmarcias" class="dropdown-item">TÊNIS-ARTES MARCIAIS</a>

                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="login">Login</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-cadastro.html">Cadastrar</a>
            </li>
        </ul>

    </div>
</nav>

<br><br>

<div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/img/imagem-1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/imagem-2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/imagem-3.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Proximo</span>
    </a>
</div>



<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <img src="/img/Tênis Nike Lebron.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tênis Nike Lebron Witness IV - Preto e Vermelho</h5>
                    <p class="card-text">R$ 359,99
                        até 9x de R$ 40,00</p>
                    <a data-toggle="modal" data-target="#exampleModalCenter" href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-login.html" class="btn btn-danger">Comprar<i class="fa fa-cart-arrow-down"></i></a>
                </div>
            </div>
        </div>


        <div class="col-3">
            <div class="card">
                <img src="/img/Tênis Oakley Socket.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tênis Oakley Socket Masculino - Preto e Chumbo</h5>
                    <p class="card-text">R$ 279,90
                        até 7x de R$ 39,99</p>
                    <a data-toggle="modal" data-target="#exampleModalCenter" href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-login.html" class="btn btn-danger">Comprar<i class="fa fa-cart-arrow-down"></i></a>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img src="/img/Tênis Nike Flex 2019 Run.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tênis Nike Flex 2019 Run Feminino-Chumbo e Branco</h5>
                    <p class="card-text">R$ 269,99
                        até 6x de R$ 45,00</p>
                    <a data-toggle="modal" data-target="#exampleModalCenter" href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-login.html" class="btn btn-danger">Comprar<i class="fa fa-cart-arrow-down"></i></a>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img src="/img/Tênis Everlast First Elite Feminino - Marinho e Pink.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tênis Everlast First Elite Feminino - Marinho e Pink</h5>
                    <p class="card-text">R$ 234,99
                        até 5x de R$ 47,00</p>
                    <a data-toggle="modal" data-target="#exampleModalCenter" href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-login.html" class="btn btn-danger">Comprar<i class="fa fa-cart-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal-->
<div class="modal fade"
     id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Logar/Cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <a href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-login.html" role="button" class="btn btn-danger popover-test" title="Popover title" data-content="Popover body content is set in this attribute." style="margin-left: 42.7%;">Login</a>
                <hr>
                <a href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-cadastro.html" role="button" class="btn btn-danger popover-test" title="Popover title" data-content="Popover body content is set in this attribute."style="margin-left: 40%">Cadastrar</a>
            </div>

        </div>
    </div>
</div>

<br><br>

<footer id="foot">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 primeiro-segmento md-mb-30 sm-mb-30">
                    <img src="/img/mcz ok branco.png" style="width: 40%; margin-top: -18%;margin-left: -2%;">
                    <p>Somos a MCZ SHOES, a loja online de sapatos. A gente acredita que pequenos gestos podem te levar aonde você sempre quis. Um olhar, um sim, aquele seu look no momento certo.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 segundo-segmento">
                    <h2>Links úteis</h2>
                    <ul>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Fale conosco</a></li>
                        <li><a href="#">Quem somos</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 terceiro-segmento">
                    <h2>Redes Sociais</h2>
                    <p>Siga-nos em nosso perfil de mídia social para se manter atualizado.</p>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 quarto-segmento">
                    <h2>Nossas Noticias e Novidades</h2>
                    <p>Inscreva-se usando seu e-mail,para receber nossas novidades e noticias.</p>
                    <form  action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span style="background: red;color: white" class="input-group-text" id="basic-addon2">Increva-se</span>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <p class="foot-text">© MCZ SHOES ( Todos os
        direitos reservados).</p>
    <!-- JS -->
    <script src="/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</footer>

</body>
</html>
