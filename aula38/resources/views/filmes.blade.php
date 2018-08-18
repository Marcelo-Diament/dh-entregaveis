<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aula 38 | Laravel IV | Filmes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-TXfwrfuHVznxCssTxWoPZjhcss/hp38gEOH8UPZG/JcXonvBQ6SlsIF49wUzsGno" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                scroll-behavior: smooth;
            }

            .full-height {
                min-height: 100vh;
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
                font-size: 65px;
                margin: 50px auto;
            }
            .title img{
                display: block;
                margin: auto;
            }
            .title a{
                color: #636b6f !important;
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
            .bloco-exercicio{
                display: block;
                width: 80vw;
                margin: 40px auto;
                border-radius: 20px;
            }
            .enunciado{
                background-color: #f2f2f2;
                text-align: left;
                width: 80vw;
                padding: 20px;
                display: inline-block;
                border-radius: 20px 20px 0px 0px;
                border-bottom: 3px solid #fa503a;
            }
            .enunciado p{
                font-weight: bold;
                margin-top: -10px;
                font-size: 11pt;
            }
            .fa-code, .fa-terminal, .fa-github{
                color: #fa503a;
                display: inline-block;
            }
            .resultado{
                background-color: #cecece;
                text-align: left;
                width: 80vw;
                padding: 20px;
                display: inline-block;
                border-radius: 0px 0px 20px 20px;
            }
            .indice{
                display: block;
            }
            ul.lista{
                list-style: none;
                font-weight: bold;
                text-align: left;
                display: inline-block;
            }
            b{
                color: #fa503a;
                font-weight: bolder;
                font-size: 1.2em;
            }
            strike{
                font-style: italic;
                color: #cecece;
            }
            ul.lista li strike{
                color: #a4a4a4;
            }
            a, a:hover, .fa-external-link, .fa-external-link:hover{
                color: #fa503a;
                text-decoration: none;
                -webkit-transition: font-size 0.4s ease-in-out;
                -o-transition: font-size 0.4s ease-in-out;
                transition: font-size 0.4s ease-in-out;
            }
            a:hover{
                font-size: 1.02em;
            }
            i.fa:hover, i.fas:hover, i.fab:hover{
                color: #d9412e;
            }
            small{
                color: #636b6f;
                font-weight: bold;
            }
            ul.menu{
                list-style: none;
                display: inline-flex;
            }
            ul.menu li{
                margin-right: 30px;
            }
            .menu .fab, .menu .fa, .menu .fas{
                font-size: 32pt;
                color: #fa503a;
            }
            .sem-uso{
                color: #636363 !important;
            }
            code{
                margin-left: 20px;
                padding: 2px;
                background-color: #f1f1f1;
            }
            small code, code.inline-code{
                margin-left: inherit;
            }
        </style>
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
                    <a href="{{url('/')}}" target="_self" title="Tela Inicial" rel="next" alt="Acessar Tela Inicial">
                        <img src="https://midnightcorp.com/wp-content/themes/midnightwp/dist/images/laravel.png" alt="Laravel" width="128" height="auto">
                        Aula 37 | Laravel III
                    </a>
                </div>

                <!-- EXERCÍCIO 03 D e G - INÍCIO-->
                @if (isset($filmes))
                    <div class="bloco-exercicio" id="37-3d-g">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Exercício 03 D e G | Listar Filmes (com detalhes)</h2>
                        </div>
                        <div class="resultado">
                            <ul class="lista">
                                @foreach ($filmes as $index=>$valor)
                                    <li>
                                        <b>{{ $valor['title'] }}</b> <small>({{ mb_substr($valor['release_date'],0,4) }})</small>
                                        <br/>
                                        Prêmios: {{ $valor['awards'] }}<br/>
                                        Avaliação: {{ $valor['rating'] }}<br/>
                                        Id do gênero: {{ $valor['genre_id'] }}
                                    </li><br/>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <!-- EXERCÍCIO 03 D e G - FIM -->

                <!-- EXERCÍCIO 05 A - INÍCIO-->
                @if (isset($idFilme))
                    <div class="bloco-exercicio" id="37-5-a">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Exercícios 05 | Buscar Filme por Id</h2>
                        </div>
                        <div class="resultado">
                            <h3>O filme de id <b>{{ $idFilme->id }}</b> se chama <b>{{ $idFilme->title }}</b>.</h3>
                            <h3>Confira abaixo os detalhes sobre {{ $idFilme->title}}:</h3>
                            <div class="profile">
                                <ul class="lista profile-desc">
                                    <li>Título: <b>{{$idFilme->title}}</b> @if (isset($idFilme->release_date)) <small> ({{ mb_substr($idFilme->release_date,0,4) }}) </small> @endif</li>
                                    <li>Duração: @if (isset($idFilme->length)) {{$idFilme->length}} @else Não avaliado @endif</li>
                                    <li>Avaliação: @if (isset($idFilme->rating)) {{$idFilme->rating}} @else Não avaliado @endif</li>
                                    <li>Prêmios: @if (isset($idFilme->awards)) {{$idFilme->awards}} @else Parece que não receberam prêmios @endif</li>
                                    <li>Id do gênero: @if (isset($idFilme->genre_id)) {{$idFilme->genre_id}} @else Não informado @endif</li>
                                </ul>
                                <h3>Clique <a href="{{url('/filmes#37-3d-g')}}" target="_self" title="Ver todos os filmes" rel="next" alt="Ver todos os filmes">aqui</a> para ver a lista de todos os filmes.</h3>
                            </div>
                        </div>
                    </div>
                @elseif (isset($idBuscado))
                    <div class="bloco-exercicio" id="37-3e-f">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Exercícios 03 E | Buscar Ator por Id</h2>
                        </div>
                        <div class="resultado">
                            <h3>Ops! Parece que não há nenhum filme com id <b>{{ $idBuscado}}</b>. Clique <a href="{{url('/filmes#37-3d-g')}}" target="_self" title="Ver todos os filmes" rel="next" alt="Ver todos os filmes">aqui</a> para ver a lista de todos os filmes.</h3>
                        </div>
                    </div>
                @endif
                <!-- EXERCÍCIO 05 A - FIM -->

                <!-- EXERCÍCIO 05 B - INÍCIO-->
                @if (isset($nomeFilme))
                    <div class="bloco-exercicio" id="37-5-a">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Exercícios 05 | Buscar Filme por Título</h2>
                        </div>
                        <div class="resultado">
                            <h3>O filme <b>{{ $nomeFilme[0]->title }}</b> é o filme de id <b>{{ $nomeFilme[0]->id }}</b>.</h3>
                            <h3>Confira abaixo os detalhes sobre {{ $nomeFilme[0]->title}}:</h3>
                            <div class="profile">
                                <ul class="lista profile-desc">
                                    <li>Título: <b>{{$nomeFilme[0]->title}}</b> @if (isset($nomeFilme[0]->release_date)) <small> ({{ mb_substr($nomeFilme[0]->release_date,0,4) }}) </small> @endif</li>
                                    <li>Duração: @if (isset($nomeFilme[0]->length)) {{$nomeFilme[0]->length}} @else Não avaliado @endif</li>
                                    <li>Avaliação: @if (isset($nomeFilme[0]->rating)) {{$nomeFilme[0]->rating}} @else Não avaliado @endif</li>
                                    <li>Prêmios: @if (isset($nomeFilme[0]->awards)) {{$nomeFilme[0]->awards}} @else Parece que não receberam prêmios @endif</li>
                                    <li>Id do gênero: @if (isset($nomeFilme[0]->genre_id)) {{$nomeFilme[0]->genre_id}} @else Não informado @endif</li>
                                </ul>
                                <h3>Clique <a href="{{url('/filmes#37-3d-g')}}" target="_self" title="Ver todos os filmes" rel="next" alt="Ver todos os filmes">aqui</a> para ver a lista de todos os filmes.</h3>
                            </div>
                        </div>
                    </div>
                @elseif (isset($tituloBuscado))
                    <div class="bloco-exercicio" id="37-3e-f">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Exercícios 03 E | Buscar Filme por Título</h2>
                        </div>
                        <div class="resultado">
                            <h3>Ops! Parece que não há nenhum filme chamado <b>{{ $tituloBuscado}}</b>. Clique <a href="{{url('/filmes#37-3d-g')}}" target="_self" title="Ver todos os filmes" rel="next" alt="Ver todos os filmes">aqui</a> para ver a lista de todos os filmes.</h3>
                        </div>
                    </div>
                @endif
                <!-- EXERCÍCIO 05 B - FIM -->
                
            </div>
        </div>
    </body>
</html>
