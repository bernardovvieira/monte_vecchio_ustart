<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MONTE VECCHIO - Frotas Automotivas</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html,
        body {
            background-image: url("https://coredebotucarai.org.br/bernardo/imagens/road.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
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
            border-radius: 8px;
            flex-direction: column;
            align-items: center;
        }

        .title {
            font-size: 87px;
            text-shadow:5px 5px 20px rgb(0, 0, 0), 5px 5px 20px rgba(0, 0, 0, 0.575);
        }

        .links>a {
            background-color: rgba(255, 255, 255, 0.637);
            border-radius: 8px;
            color: rgb(255, 255, 255);
            padding: 0 45px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            text-shadow:1px 1px 10px rgb(0, 0, 0), 1px 1px 10px #ccc;
        }
        .links>a:hover {
            opacity: 1;
            right: 10px;
            color: #000000;

            text-shadow:1px 1px 20px rgb(0, 0, 0), 1px 1px 20px #ccc;
        }

        .m-b-md {
            margin-bottom: 15px;
        }

        .pg-box {
            background-color: rgba(255, 255, 255, 0.637);
            border-radius: 8px;
            width: 100px;
            padding: 20px;
            margin-bottom: 15px;
            margin-left: 40%;
            align-items: center;
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
            <div class="title m-b-md">
                MONTE VECCHIO
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
