<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aula 37 | Laravel III</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-TXfwrfuHVznxCssTxWoPZjhcss/hp38gEOH8UPZG/JcXonvBQ6SlsIF49wUzsGno" crossorigin="anonymous">
        
        <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">

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
            ol.lista{
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
            div.profile{
                display: inline-flex;
                margin: 15px;
                padding: 15px;
            }
            img.profile-pic{
                height: 150px;
                width: 150px;
                border-radius: 50%;
                margin: auto;
                border: 2px solid #fa503a;
           }
            .profile-desc{
                margin: auto;
            }
            label{
                color: #636b6f;
                font-weight: bold;
                margin-left: 5px;
            }
            input[type=text], input[type=number], select, input[type=datetime-local]{
                padding: 8px 10px;
                width: 20%;
                margin-top: 8px;
                margin-bottom: 30px;
                border-radius: 20px;
                border: 1px solid #a5a5a5;
            }
            input[type=datetime-local]{
                color: #636b6f;
                width: 175px;
            }
            select{
                width: 250px;
                color: #636b6f;
            }
            input[type=text]:focus, input[type=datetime-local]:focus, input[type=number]:focus, select:focus,
            input[type=text]:focus-within, input[type=datetime-local]:focus-within, input[type=number]:focus-within, select:focus-within,
            input[type=text]:active, input[type=datetime-local]:active, input[type=number]:active, select:active
            {
                border: 1px solid #fa503a;
                outline-color: transparent !important;
            }
            input[type=submit]{
                background-color: #fa503a;
                color: #fff;
                padding: 6px 10px 7px 10px;
                font-size: 12pt;
                border-radius: 20px;
                margin-left: 10px;
                border: 1px solid #a5a5a5;
                border-left: none;
            }
            input[type=submit]:hover{
                background-color: #d9412e;
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

                <!-- EXERCÍCIO 04 A, B e D - INÍCIO-->
                <div class="bloco-exercicio" id="37-4a-b-c-d">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Exercícios 04 A, B, C e D | Buscar Ator por Nome</h2>
                    </div>
                    <div class="resultado">
                        <form action="/ator/buscarNomeAtor" method="post">
                            @csrf
                            <label for="nomeAtor">Digite o nome do Ator que está buscando</label>
                            <br/>
                            <input type="text" placeholder="Insira o nome do ator buscado" id="nomeAtor" name="nomeAtor" title="Insira o nome do ator buscado">
                            <input type="submit" value="Buscar Ator" title="Clique aqui para buscar o ator desejado (após preencher seu nome no campo ao lado)">
                            <input type="submit" value="Limpar Busca" title="Clique aqui para refazer a buscar o ator desejado">
                        </form>

                <!-- EXERCÍCIO 04 A, B e D - FIM -->

                        <!-- EXERCÍCIO 04 C - INÍCIO-->
                        @if (isset($nomeBuscado) && $atorPorNome != null)
                            <h3>Os atores/atrizes chamados <b>{{ $nomeBuscado }}</b> são:</h3>
                                @foreach ($atorPorNome as $index=>$valor)
                                    <div class="profile">
                                        <img class="profile-pic" src="@if ($valor->picture_url != null) {{$valor->picture_url}} @else https://us.123rf.com/450wm/berkut2011/berkut20111506/berkut2011150600452/41143316-stock-vector-man-in-suit-secret-service-agent-icon.jpg?ver=6 @endif" title="{{$valor->first_name}} {{$valor->last_name}}" alt="{{$valor->first_name}} {{$valor->last_name}}" height="150" width="150">
                                        <ul class="lista profile-desc">
                                            <li>Nome: {{$valor->first_name}}</li>
                                            <li>Sobrenome: {{$valor->last_name}}</li>
                                            <li>Avaliação: @if (isset($valor->rating)) {{$valor->rating}} @else Não avaliado @endif</li>
                                            <li>Id do seu filme favorito: @if (isset($valor->favorite_movie_id)) {{$valor->favorite_movie_id}} @else Não informado @endif</li>
                                        </ul>
                                    </div>
                                @endforeach
                        @elseif (isset($nomeBuscado))
                            <h3>Não há atores que se chamam <b>{{ $nomeBuscado }}</b></h3>
                        @endif
                    </div>
                <!-- EXERCÍCIO 04 C - FIM -->

                <!-- EXERCÍCIO 03 A, B, C e H - INÍCIO-->
                @if (isset($atores))
                    <div class="bloco-exercicio" id="37-3a-b-c-h">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Exercícios 03 A, B, C e H | Listar Atores com Link para Detalhes</h2>
                        </div>
                        <div class="resultado">
                            <ul class="lista">
                                @foreach ($atores as $index=>$valor)
                                    <li>{{ $valor['first_name'] }} {{ $valor['last_name'] }} <a href="http://localhost:8000/ator/{{$valor['id']}}/#37-3e-f" target="_self" title="Acessar Detalhes do Ator" rel="next" alt="Acessar Detalhes do Ator"><i class="fas fa-plus-circle"></i></a></li><br/>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <!-- EXERCÍCIO 03 A, B, C e H - FIM -->

                <!-- EXERCÍCIO 03 E - INÍCIO-->
                @if (isset($atorPorId))
                    <div class="bloco-exercicio" id="37-3e-f">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Exercícios 03 E e F | Buscar Ator por Id</h2>
                        </div>
                        <div class="resultado">
                            <h3>O ator/atriz de id <b>{{ $atorPorId->id }}</b> se chama <b>{{ $atorPorId->first_name .' '. $atorPorId->last_name }}</b>.</h3>
                            <h3>Confira abaixo os detalhes sobre {{ $atorPorId->first_name}}:</h3>
                            <div class="profile">
                                <img class="profile-pic" src="@if ($atorPorId->picture_url != null) {{$atorPorId->picture_url}} @else https://us.123rf.com/450wm/berkut2011/berkut20111506/berkut2011150600452/41143316-stock-vector-man-in-suit-secret-service-agent-icon.jpg?ver=6 @endif" title="{{$atorPorId->first_name}} {{$atorPorId->last_name}}" alt="{{$atorPorId->first_name}} {{$atorPorId->last_name}}" height="150" width="150">
                                <ul class="lista profile-desc">
                                    <li>Nome: {{$atorPorId->first_name}}</li>
                                    <li>Sobrenome: {{$atorPorId->last_name}}</li>
                                    <li>Avaliação: @if (isset($atorPorId->rating)) {{$atorPorId->rating}} @else Não avaliado @endif</li>
                                    <li>Id do seu filme favorito: @if (isset($atorPorId->favorite_movie_id)) {{$atorPorId->favorite_movie_id}} @else Não informado @endif</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @elseif (isset($idBuscado))
                    <div class="bloco-exercicio" id="37-3e-f">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Exercícios 03 E | Buscar Ator por Id</h2>
                        </div>
                        <div class="resultado">
                            <h3>Ops! Parece que não há nenhum ator nem atriz com id <b>{{ $idBuscado }}</b>. Clique <a href="{{url('/atores/#37-3a-b-c')}}" target="_self" title="Ver todos os atores e atrizes" rel="next" alt="Ver todos os atores e atrizes">aqui</a> para ver a lista de todos os atores e atrizes.</h3>
                        </div>
                    </div>
                @endif
                <!-- EXERCÍCIO 03 E - FIM -->

                </div>
            </div>
        </div>
    </body>
</html>
