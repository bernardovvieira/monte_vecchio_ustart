<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monte Vecchio - Frotas Automotivas</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #000000;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #000000;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function btn_info() {
            Swal.fire({
                icon: 'info',
                title: 'Conteúdo não disponível no momento',
                text: 'Por favor, tente novamente mais tarde.',
                showConfirmButton: false,
                timer: 3000
            });
        }
    </script>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Entre</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registre-se</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="content">
            <img src="https://coredebotucarai.org.br/bernardo/imagens/favicon.ico" alt="car_logo">
            <div class="title m-b-md">
                Monte Vecchio
            </div>
            <div class="links">
                <a href="#" onclick="btn_info();">Veículos</a>
                <a href="#" onclick="btn_info();">Notícias</a>
                <a href="#" onclick="btn_info();">Galeria</a>
                <a href="#" onclick="btn_info();">Blog</a>
                <a href="#" onclick="btn_info();">Parceiros</a>
                <a href="#" onclick="btn_info();">Sobre</a>
                <a href="#" onclick="btn_info();">Contato</a>
            </div>
        </div>
    </div>
</body>

</html>
