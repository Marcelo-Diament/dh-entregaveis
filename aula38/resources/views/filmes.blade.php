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
            input[type=submit], button#fullScreen{
                background-color: #fa503a;
                color: #fff;
                padding: 6px 10px;
                font-size: 12pt;
                border-radius: 20px;
                margin-left: 10px;
                border: 1px solid #a5a5a5;
            }
            input[type=submit]:hover, button#fullScreen:hover{
                background-color: #d9412e;
            }
            button#fullScreen{
                position: fixed;
                top: 25px;
                right: 50px;
            }
            input[name=nomeFilme], input[name=idFilme]{
                padding: 8px 10px;
                width: 20%;
                margin-top: 10px;
                border-radius: 20px 0 0 20px;
                border: 1px solid #a5a5a5;
                border-right: none;
            }
            input[value=nomeFilme]:focus, , input[name=idFilme]:focus{
                padding: 8px 10px;
                width: 20%;
                margin-top: 10px;
                border-radius: 20px 0 0 20px;
                border: 1px solid #fa503a;
                border-right: none;
                outline-color: transparent;
            }
            input[id="buscaFilmeTituloSubmit"], input[id="buscaFilmeIdSubmit"]{
                background-color: #fa503a;
                color: #fff;
                padding: 6px 10px 7px 10px;
                font-size: 12pt;
                border-radius: 0 20px 20px 0;
                margin-left: -5px;
                border: 1px solid #a5a5a5;
                border-left: none;
            }
            #logos {
               position:fixed;  bottom: 25px;  right: 50px;  -webkit-perspective: 50px;
               perspective: 800px; 
            }
            #cube {
              display: block;  position: relative;  margin: 20px auto;
              height: 60px;  width: 60px;
              -webkit-transform-style: preserve-3d;
              -webkit-transform: rotateX(0) rotateY(0) rotateZ(0);
              transform-style: preserve-3d;
              transform: rotateX(0) rotateY(0) rotateZ(0);

            }
            #front {
              position: absolute;  height: 60px;  width: 60px;
              -webkit-backface-visibility: hidden;
              -webkit-transform:  translateZ(25px);
              backface-visibility: hidden;
              transform:  translateZ(25px);
            }
            #back {
              position: absolute;  height: 60px;  width: 60px;
              -webkit-backface-visibility: visible;
              -webkit-transform:  rotateY(180deg) translateZ(25px);
              backface-visibility: visible;
              transform: rotateY(180deg) translateZ(25px);
            }
            #cube {
              -webkit-animation: upyourscache1534623125707 4s infinite linear;
              animation: upyourscache1534623125707 4s infinite linear;

            }
            @-webkit-keyframes upyourscache1534623125707 {
              0% { -webkit-transform: rotateY(0) ;}
              100% { -webkit-transform: rotateY(360deg) ;}
            }
            @keyframes upyourscache1534623125707 {
              0% { transform: rotateY(0) ;}
              100% { transform: rotateY(360deg) ;}
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
                
                <!-- RESULTADO DE BUSCA DE FILME POR ID - INÍCIO -->
                @if (isset($idFilme) && (isset($idBuscado)))
                    <div class="bloco-exercicio" id="resultadoBuscaTituloId">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Encontramos o filme buscado!</h2>
                        </div>
                        <div class="resultado">
                            <h3>O filme de id <b>{{ $filmePorId[0]->id }}</b> é se chama <b>{{ $filmePorId[0]->title }}</b>.</h3>
                            <h3>Confira abaixo os detalhes sobre {{ $filmePorId[0]->title}}:</h3>
                            <div class="profile">
                                <ul class="lista profile-desc">
                                    <li>Título: <b>{{$filmePorId[0]->title}}</b> @if (isset($filmePorId[0]->release_date)) <small> ({{ mb_substr($filmePorId[0]->release_date,0,4) }}) </small> @endif</li>
                                    <li>Duração: @if (isset($filmePorId[0]->length)) {{$filmePorId[0]->length}}' @else Não informado @endif</li>
                                    <li>Avaliação:
                                        @if (isset($filmePorId[0]->rating))
                                            {{$filmePorId[0]->rating}} 
                                        @else
                                            Não Avaliado
                                        @endif
                                        @if (isset($filmePorId[0]->rating))
                                             | 
                                            @for ($i = 0; $i < intval($filmePorId[0]->rating); $i++)
                                                <i style="font-size:10pt;color:#fa503a;" class="fas fa-star"></i>
                                            @endfor
                                        @endif
                                        @if ($filmePorId[0]->rating - intval($filmePorId[0]->rating) > 0)
                                            <i style="font-size:10pt;color:#fa503a;" class="fas fa-star-half"></i>
                                        @endif
                                        @if ($filmePorId[0]->rating == 0)
                                            <i style="font-size:10pt;color:#fa503a;" class="fas fa-poop"></i>
                                        @endif
                                    </li>
                                    <li>Prêmios:
                                        @if (isset($filmePorId[0]->awards))
                                            {{$filmePorId[0]->awards}} 
                                        @else
                                            Não Informado
                                        @endif
                                        @if (isset($filmePorId[0]->awards) && $filmePorId[0]->awards > 0)
                                         | 
                                            @for ($i = 0; $i < $filmePorId[0]->awards; $i++)
                                                <i style="font-size:10pt;color:#fa503a;" class="fas fa-award"></i>
                                            @endfor
                                        @endif
                                    </li>
                                    <li>Gênero: @if (isset($filmePorId[0]->genero)) {{$filmePorId[0]->genero['name']}} @else Não informado @endif</li>
                                </ul>
                                <br/>
                            </div>
                            <h3>Clique <a href="{{url('/filmes#todosOsFilmes')}}" target="_self" title="Ver todos os filmes" rel="next" alt="Ver todos os filmes">aqui</a> para ver a lista de todos os filmes.  Se preferir, realize uma nova busca utilizando o formulário a seguir.</h3>
                        </div>
                    </div>
                @elseif (isset($idBuscado) && $idFilme == null)
                    <div class="bloco-exercicio" id="resultadoBuscaTituloId">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Hmmm...</h2>
                        </div>
                        <div class="resultado">
                            <h3>Parece que não há nenhum filme com o id <b>{{ $idBuscado}}</b>.</h3>
                            <h3>Por favor, verifique o id digitado no formulário mais adiante e tente novamente.</h3>
                            <h3>Se preferir, clique <a href="{{url('/filmes#todosOsFilmes')}}" target="_self" title="Ver todos os filmes" rel="next" alt="Ver todos os filmes">aqui</a> para ver a lista de todos os filmes.</h3>
                        </div>
                    </div>
                @endif
                <!-- RESULTADO DE BUSCA DE FILME POR ID - FIM -->
                
                <!-- RESULTADO DE BUSCA DE FILME POR TÍTULO - INÍCIO -->
                @if (isset($nomeFilme) && (isset($nomeBuscado)))
                    <div class="bloco-exercicio" id="resultadoBuscaTituloFilme">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Encontramos o filme buscado!</h2>
                        </div>
                        <div class="resultado">
                            <h3>O filme <b>{{ $filmePorNome[0]->title }}</b> é o filme de id <b>{{ $filmePorNome[0]->id }}</b>.</h3>
                            <h3>Confira abaixo os detalhes sobre {{ $filmePorNome[0]->title}}:</h3>
                            <div class="profile">
                                <ul class="lista profile-desc">
                                    <li>Título: <b>{{$filmePorNome[0]->title}}</b> @if (isset($filmePorNome[0]->release_date)) <small> ({{ mb_substr($filmePorNome[0]->release_date,0,4) }}) </small> @endif</li>
                                    <li>Duração: @if (isset($filmePorNome[0]->length)) {{$filmePorNome[0]->length}}' @else Não informado @endif</li>
                                    <li>Avaliação:
                                        @if (isset($filmePorNome[0]->rating))
                                            {{$filmePorNome[0]->rating}} 
                                        @else
                                            Não Avaliado
                                        @endif
                                        @if (isset($filmePorNome[0]->rating))
                                             | 
                                            @for ($i = 0; $i < intval($filmePorNome[0]->rating); $i++)
                                                <i style="font-size:10pt;color:#fa503a;" class="fas fa-star"></i>
                                            @endfor
                                        @endif
                                        @if ($filmePorNome[0]->rating - intval($filmePorNome[0]->rating) > 0)
                                            <i style="font-size:10pt;color:#fa503a;" class="fas fa-star-half"></i>
                                        @endif
                                        @if ($filmePorNome[0]->rating == 0)
                                            <i style="font-size:10pt;color:#fa503a;" class="fas fa-poop"></i>
                                        @endif
                                    </li>
                                    <li>Prêmios:
                                        @if (isset($filmePorNome[0]->awards))
                                            {{$filmePorNome[0]->awards}} 
                                        @else
                                            Não Informado
                                        @endif
                                        @if (isset($filmePorNome[0]->awards) && $filmePorNome[0]->awards > 0)
                                             | 
                                            @for ($i = 0; $i < $filmePorNome[0]->awards; $i++)
                                                <i style="font-size:10pt;color:#fa503a;" class="fas fa-award"></i>
                                            @endfor
                                        @endif
                                    </li>
                                    <li>Gênero: @if (isset($filmePorNome[0]->genero)) {{$filmePorNome[0]->genero['name']}} @else Não informado @endif</li>
                                </ul>
                                <br/>
                            </div>
                            <h3>Clique <a href="{{url('/filmes#todosOsFilmes')}}" target="_self" title="Ver todos os filmes" rel="next" alt="Ver todos os filmes">aqui</a> para ver a lista de todos os filmes.  Se preferir, realize uma nova busca utilizando o formulário a seguir.</h3>
                        </div>
                    </div>
                @elseif (isset($nomeBuscado) && $nomeFilme == null)
                    <div class="bloco-exercicio" id="resultadoBuscaTituloFilme">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Ops!</h2>
                        </div>
                        <div class="resultado">
                            <h3>Parece que não há nenhum filme chamado <b>{{ $nomeBuscado}}</b>.</h3>
                            <h3>Por favor, verifique o título digitado no formulário mais adiante e tente novamente.</h3>
                            <h3>Se preferir, clique <a href="{{url('/filmes#todosOsFilmes')}}" target="_self" title="Ver todos os filmes" rel="next" alt="Ver todos os filmes">aqui</a> para ver a lista de todos os filmes.</h3>
                        </div>
                    </div>
                @endif
                <!-- RESULTADO DE BUSCA DE FILME POR TÍTULO - FIM -->


                <!-- BUSCAR FILME POR TÍTULO - INÍCIO-->
                <div class="bloco-exercicio" id="buscaTituloFilme">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Buscar Filme por Título</h2>
                    </div>
                    <div class="resultado">
                        <form action="/filme/buscarNomeFilme" method="post">
                            {{ csrf_field() }}
                            {{ method_field('post')}}
                            <label for="nomeFilme">Digite o nome do Filme que está buscando</label>
                            <br/>
                            @if (!isset($nomeFilme) && isset($nomeBuscado))
                            <input type="text" placeholder="Insira o nome do filme buscado" id="nomeFilme" name="nomeFilme" title="Insira o nome do filme buscado" value="{{ $nomeBuscado }}">
                            @else
                            <input type="text" placeholder="Insira o nome do filme buscado" id="nomeFilme" name="nomeFilme" title="Insira o nome do filme buscado">
                            @endif
                            <input type="submit" id="buscaFilmeTituloSubmit" value="Buscar Filme" title="Clique aqui para buscar o filme desejado (após preencher seu nome no campo ao lado)">
                            <input type="submit" value="Limpar Busca" title="Clique aqui para refazer a busca do filme desejado">
                        </form>
                    </div>
                </div>
                <!-- BUSCAR FILME POR TÍTULO - FIM -->


                <!-- BUSCAR FILME POR ID - INÍCIO-->
                <div class="bloco-exercicio" id="buscaIdFilme">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Buscar Filme por Id</h2>
                    </div>
                    <div class="resultado">
                        <form action="/filme/buscarIdFilme" method="post">
                            {{ csrf_field() }}
                            {{ method_field('post')}}
                            <label for="idFilme">Digite o id do Filme que está buscando</label>
                            <br/>
                            @if (!isset($idFilme) && isset($idBuscado))
                            <input type="text" placeholder="Insira o id do filme buscado" id="idFilme" name="idFilme" title="Insira o id do filme buscado" value="{{ $idBuscado }}">
                            @else
                            <input type="text" placeholder="Insira o id do filme buscado" id="idFilme" name="idFilme" title="Insira o id do filme buscado">
                            @endif
                            <input type="submit" id="buscaFilmeIdSubmit" value="Buscar Filme" title="Clique aqui para buscar o filme desejado (após preencher seu id no campo ao lado)">
                            <input type="submit" value="Limpar Busca" title="Clique aqui para refazer a buscar o filme desejado">
                        </form>
                    </div>
                </div>
                <!-- BUSCAR FILME POR ID - FIM -->

                <!-- LISTAR FILMES - INÍCIO-->
                @if (isset($filmes))
                    <div class="bloco-exercicio" id="todosOsFilmes">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Lista de Todos os Filmes</h2>
                        </div>
                        <div class="resultado">
                            <ul class="lista">
                                @foreach ($filmes as $index=>$valor)
                                    <li>
                                        <b>{{ $valor['title'] }}</b> <small>({{ mb_substr($valor['release_date'],0,4) }})</small>
                                        <br/>
                                        Avaliação:
                                            @if (isset($valor['rating']))
                                                {{$valor['rating']}}
                                            @else
                                                Não Avaliado
                                            @endif
                                            @if (isset($valor['rating']))
                                                 | 
                                                @for ($i = 0; $i < intval($valor['rating']); $i++)
                                                    <i style="font-size:10pt;color:#fa503a;" class="fas fa-star"></i>
                                                @endfor
                                            @endif
                                            @if ($valor['rating'] - intval($valor['rating']) > 0)
                                                <i style="font-size:10pt;color:#fa503a;" class="fas fa-star-half"></i>
                                            @endif
                                            @if ($valor['rating'] == 0)
                                                <i style="font-size:10pt;color:#fa503a;" class="fas fa-poop"></i>
                                            @endif
                                        <br/>
                                        Prêmios: 
                                            @if (isset($valor['awards']))
                                                {{$valor['awards']}} 
                                            @else
                                                Não Avaliado
                                            @endif
                                            @if (isset($valor['awards']) && $valor['awards'] > 0)
                                                 | 
                                                @for ($i = 0; $i < $valor['awards']; $i++)
                                                    <i style="font-size:10pt;color:#fa503a;" class="fas fa-award"></i>
                                                @endfor
                                            @endif
                                            <br/>
                                        Duração: @if(isset($valor['length'])) {{ $valor['length'] }}' @else Não informado @endif<br/>
                                        @if ($valor['genre_id'])
                                            Gênero: {{ $valor['genero']['name'] }}
                                        @elseif (!$valor['genre_id'])
                                            Gênero não especificado
                                        @endif
                                    </li><br/>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <!-- LISTAR FILMES - FIM -->

                
            </div>
        </div>
        <div id="logos">
            <a id="cube" href="https://djament.com.br" title="Djament Comunicação" alt="Djament Comunicação" rel="external" target="_blank">
                <img src="https://djament.com.br/assets/img/logo-60x60.png" height="60px" width="60px"  id="front" alt="Djament" title="Djament">
                <img src="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png" height="60px" width="60px" id="back" alt="Digital House" title="Digital House">
            </a>
        </div>
    </body>
</html>
