<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .lista ul{
                list-style: none;
                font-weight: bold;
                text-align: left;
                display: inline-block;
            }
        </style>
        <!-- ARRAY DE FILMES -->
        <?php
            $filmes = [
                1 => "Toy Story",
                2 => "Procurando Nemo",
                3 => "Avatar",
                4 => "Star Wars: Episódio V",
                5 => "Up",
                6 => "Mary e Max"
            ];
        ?>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Aula 36 | Laravel II
                </div>
                <h3>Exercícios 2a (comentado) e 2b</h3>
                <hr>
                <h2>Confira a seguir os filmes cadastrados</h2>
                <!-- Exercício 2a -->
                <!-- <div class="lista">
                    <ul>
                        <?php
                            //foreach ($filmes as $idFilme => $nomeFilme) {
                                //echo '<li>'.$nomeFilme.'</li><br/>';
                            //}
                        ?>
                    </ul>
                </div> -->
                <div class="lista">
                    <ul>
                        @foreach ($filmes as $idFilme => $nomeFilme)
                            <li> {{ $nomeFilme }} </li><br/>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
