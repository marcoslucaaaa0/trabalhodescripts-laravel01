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
                <a class="nav-link dropdown-toggle" href="#" id="menu_dropdown" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Categorias</a>
                <div class="dropdown-menu">
                    <a href="tenisdecorrida" class="dropdown-item">Tênis de corrida</a>
                    <div class="dropdown-divider"></div>
                    <a href="skateesurf" class="dropdown-item">Skate e Surf</a>
                    <div class="dropdown-divider"></div>
                    <a href="basquete" class="dropdown-item">Basquete</a>
                    <div class="dropdown-divider"></div>
                    <a href="artesmarcias" class="dropdown-item">TÊNIS-ARTES MARCIAIS</a>

            </li>
            <li class="nav-item active">
                <a class="nav-link" href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-login.html">Login</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link"
                   href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-cadastro.html">Cadastrar</a>
            </li>
        </ul>
    </div>

</nav>
<br><br>
<div class="container-fluid gg-container2">

    <form action="{{route('logar')}}" method="post">
        @csrf
        @if(Session('erro'))
            <p style="color: red;text-align: center"><strong>erro!</strong> {{Session('erro')}}</p>
        @endif
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputEmail4">E-mail *</label>
                <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="huehue@gmail.com">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Senha *</label>
                <input name="senha" type="password" class="form-control" id="inputPassword4">
                <small id="passwordHelpInline" class="text-muted">
                    Deve ter entre 8 e 30 caracteres.
                </small>
            </div>
        </div>
</div>
<div align="center">
    <input type="submit" value="Login" class="btn btn-danger butao">
</div>
<div align="center">
    <a href="file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-esqueciasenha.html" style="color: red">Esqueci
        a senha</a>
</div>
</form>
</div>

<br><br>
<footer id="foot">
    <div class="footer-top" style="margin-top: 5% !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 primeiro-segmento md-mb-30 sm-mb-30">
                    <img src="/img/mcz ok branco.png" style="width: 40%; margin-top: -18%;margin-left: -2%;">
                    <p>Somos a MCZ SHOES, a loja online de sapatos. A gente acredita que pequenos gestos podem te levar
                        aonde você sempre quis. Um olhar, um sim, aquele seu look no momento certo.</p>
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
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Recipient's username"
                                   aria-describedby="basic-addon2">
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
        direitos reservados).</p>        <!-- JS -->
    <script src="/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

</footer>

{{--<!-- JS -->--}}
{{--<script>--}}

{{--    async function mensagem(){--}}

{{--        const Toast =  Swal.mixin({--}}
{{--            toast: true,--}}
{{--            position: 'top-end',--}}
{{--            showConfirmButton: false,--}}
{{--            timer: 2000,--}}
{{--            timerProgressBar: true,--}}
{{--            onOpen: (toast) => {--}}
{{--                toast.addEventListener('mouseenter', Swal.stopTimer)--}}
{{--                toast.addEventListener('mouseleave', Swal.resumeTimer)--}}
{{--            }--}}
{{--        })--}}

{{--        await Toast.fire({--}}
{{--            icon: 'success',--}}
{{--            title: 'Logado com sucesso!'--}}
{{--        })--}}
{{--        window.location.href = "file:///C:/Users/marco/Desktop/prototipo.git/trunk/MCZ%20SHOES%20-Efetuando-compra.html";--}}

{{--    }--}}

{{--</script>--}}

</body>
</html>
