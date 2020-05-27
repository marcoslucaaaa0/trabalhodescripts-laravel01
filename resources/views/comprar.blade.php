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
    <link rel="stylesheet" href="sweetalert2.min.css">


</head>
<body>
<nav class="navbar navbar-expand-xl fixed-top bg-dark navbar-dark">
    <a href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES.html" class="navbar-brand"><img src="/img/mcz ok branco.png" style="margin-left: 2%; width: 10%;"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- links -->
    <div id="menu" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-md-auto">

            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="menu_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                <div class="dropdown-menu">
                    <a href="{{route('corrida')}}" class="dropdown-item">Tênis de corrida</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('skateesurf)}}" class="dropdown-item">Skate e Surf</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('basquete')}}" class="dropdown-item">Basquete</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('artesmarcias')}}" class="dropdown-item">TÊNIS-ARTES MARCIAIS</a>

                </div>
            </li>
        </ul>
    </div>
</nav>
<br><br>
<br><br>
<div class="container-fluid gg-container">
    <h2>Pagamento</h2>
    <form class="ajustando">
        <fieldset class="form-group">
            <div class="row">
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="opcao1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Credito
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="opcao2">
                        <label class="form-check-label" for="gridRadios2">
                            Debito
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="opcao3" disabled>
                        <label class="form-check-label" for="gridRadios3">
                            Boleto
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputCity">Numero do cartao *</label>
                <input type="text" class="form-control" id="inputCity" placeholder="0000 0000 0000 0000">
            </div>
            <div class="form-group col-md-2">
                <label for="inputState">Banderira do cartao *</label>
                <select id="inputState" class="form-control">
                    <option selected>MasterCard</option>
                    <option selected>Visa</option>
                    <option selected>Elo</option>
                    <option selected>Amex</option>
                    <option selected>Hipercard</option>
                    <option selected>Green Card</option>
                    <option selected>Verocard</option>
                    <option selected></option>

                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputZip">CVV *</label >
                <input type="text" class="form-control" id="inputZip" placeholder="XXX" >
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Vencimento *</label >
                <input type="text" class="form-control" id="inputZip" placeholder="XX/XX" >
            </div>
            <div class="form-group col-md-2">
                <label for="inputState">Parcelas *</label>
                <select id="inputState" class="form-control">
                    <option selected>1x de R$ 360,00</option>
                    <option selected>2x de R$ 180,00</option>
                    <option selected>3x de R$ 120,00</option>
                    <option selected>4x de R$ 90,00</option>
                    <option selected>5x de R$ 72,00</option>
                    <option selected>6x de R$ 60,00</option>
                    <option selected>7x de R$ 52,00</option>
                    <option selected>8x de R$ 45,00</option>
                    <option selected>9x de R$ 40,00</option>
                    <option selected></option>

                </select>
            </div>
        </div>

        <a href="#" class="btn btn-danger" onclick="mensagem()">Comprar<i class="fa fa-cart-arrow-down"></i></a>
    </form>

    <div class="col-3 card mb-3 nova">
        <div class="card-header">
            <h2>Sua compra</h2>
        </div>

        <div class="card-body">
            <div class="card border border-0">
                <img src="/img/Tênis Nike Lebron.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tênis Nike Lebron Witness IV Masculino - Preto e Vermelho</h5>
                    <p class="card-text">R$ 360,00
                        até 9x de R$ 40,00</p>

                </div>
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

<!-- JS -->
<script>
    function mensagem(){
        Swal.fire({
            icon: 'success',
            title: 'Compra Finalizada Com Sucesso!',
            showConfirmButton: false,
            confirmButtonText:
                '<a href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES.html">Inicio</a>',
            footer: '<a href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES.html">Quer Continuar Comprando?</a>'
        })
    }

</script>

</body>
</html>


