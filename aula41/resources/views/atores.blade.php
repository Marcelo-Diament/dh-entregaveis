<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aula 41 | Laravel VII</title>

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
/*                height: 150px;
                width: 150px;*/
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
            input[name=nomeFilme], input[name=idFilme], input[name=nomeAtor], input[name=idAtor]{
                padding: 8px 10px;
                width: 20%;
                margin-top: 10px;
                border-radius: 20px 0 0 20px;
                border: 1px solid #a5a5a5;
                border-right: none;
            }
            input[name=nomeFilme]:focus, , input[name=idFilme]:focus,  input[name=nomeAtor]:focus, input[name=idAtor]:focus{
                padding: 8px 10px;
                width: 20%;
                margin-top: 10px;
                border-radius: 20px 0 0 20px;
                border: 1px solid #fa503a;
                border-right: none;
                outline-color: transparent;
            }
            input[id="buscaFilmeTituloSubmit"], input[id="buscaFilmeIdSubmit"],input[id="buscaAtorNomeSubmit"], input[id="buscaAtorIdSubmit"]{
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
            .botoes-inline{
                display: inline-flex;
                margin-left: 20px;
            }
            a:focus, button:focus, input:focus, select:focus, option:focus, input[type=submit]:focus{
                outline-color: transparent !important;
                outline-style: none !important;
                outline-width: 0px !important;
                border: 1px solid #fa503a;
            }
            .title a:focus{
                outline-color: transparent !important;
                outline-style: none !important;
                outline-width: 0px !important;
                border: none !important;
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
                        Laravel | Paginação
                    </a>
                </div>

                <!-- CONFIRMAÇÃO ADIÇÃO DE ATOR COM LISTA EM SEGUIDA -->
                @if (isset($nomeCompleto))
                    <div class="bloco-exercicio" id="resultadoAtorAddSuccess">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Novo Ator/Atriz Adicionado(a)!</h2>
                        </div>
                        <div class="resultado">
                            <h3>O cadastro de <b>{{$nomeCompleto}}</b> foi salvo com sucesso! Confira os detalhes a seguir:</h3>
                            <div class="profile">
                                <img class="profile-pic" src="@if ($novoAtor->picture_url != null) {{$novoAtor->picture_url}} @else https://us.123rf.com/450wm/berkut2011/berkut20111506/berkut2011150600452/41143316-stock-vector-man-in-suit-secret-service-agent-icon.jpg?ver=6 @endif" title="{{$novoAtor->first_name}} {{$novoAtor->last_name}}" alt="{{$novoAtor->first_name}} {{$novoAtor->last_name}}" height="150" width="150">
                                <ul class="lista profile-desc">
                                    <li>Nome: {{$novoAtor->first_name}}</li>
                                    <li>Sobrenome: {{$novoAtor->last_name}}</li>
                                    <li>Avaliação: 
                                        @if (isset($novoAtor->rating))
                                            {{$novoAtor->rating}} 
                                        @else
                                            Não Avaliado
                                        @endif
                                        <br/>
                                        @if (isset($novoAtor->rating))
                                            @for ($i = 0; $i < intval($novoAtor->rating); $i++)
                                                <i style="font-size:10pt;color:#fa503a;" class="fas fa-star"></i>
                                            @endfor
                                        @endif
                                        @if ($novoAtor->rating - intval($novoAtor->rating) > 0)
                                            <i style="font-size:10pt;color:#fa503a;" class="fas fa-star-half"></i>
                                        @endif
                                    </li>
                                    <li>Filme favorito: @if (isset($novoAtor->favorite_movie_id)) <br/>{{$novoAtor->favMovie['title']}} @else Não informado @endif</li>
                                </ul>
                            </div>
                            <br/>
                            <br/>
                            <div class="botoes-inline">
                            <form action="/atores#todosOsAtores" method="get">
                                <input type="submit" value="Ver Todos os Atores">
                            </form>
                            <form action="/add#adicionarAtorEnunciado" method="get">
                                <input type="submit" value="Adicionar Mais um Ator">
                            </form>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- CONFIRMAÇÃO ADIÇÃO DE ATOR COM LISTA EM SEGUIDA -->



                <!-- RESULTADO DE BUSCA DE ATOR POR NOME - INÍCIO-->
                    @if (isset($nomeBuscado) && $atorPorNome != null)
                        <div class="bloco-exercicio" id="resultadoBuscaNomeAtor">
                            <div class="enunciado">
                                <h2><i class="fas fa-code"></i> Resultado Busca de Ator por Nome</h2>
                            </div>
                            <div class="resultado">
                                @if (count($atorPorNome) == 1)
                                    <h2>Encontramos um ator/atriz com o nome {{$nomeBuscado}}!</h2>
                                    <h3>Confira os resultados para o nome <b>{{ $nomeBuscado }}</b>:</h3>
                                @elseif (count($atorPorNome) > 1)
                                    <h2>Parece que há mais de um(a) ator/atriz com o nome {{$nomeBuscado}} - na verdade existem {{ count($atorPorNome) }} "{{$nomeBuscado}}s"!</h2>
                                    <h3>Confira o resultado para o nome <b>{{ $nomeBuscado }}</b>:</h3>
                                @endif
                                @foreach ($atorPorNome as $index=>$valor)
                                    <div class="profile">
                                        <img class="profile-pic" src="@if ($valor->picture_url != null) {{$valor->picture_url}} @else https://us.123rf.com/450wm/berkut2011/berkut20111506/berkut2011150600452/41143316-stock-vector-man-in-suit-secret-service-agent-icon.jpg?ver=6 @endif" title="{{$valor->first_name}} {{$valor->last_name}}" alt="{{$valor->first_name}} {{$valor->last_name}}" height="150" width="150">
                                        <ul class="lista profile-desc">
                                            <li>Nome: {{$valor->first_name}}</li>
                                            <li>Sobrenome: {{$valor->last_name}}</li>
                                            <li>Avaliação: 
                                                @if (isset($valor->rating))
                                                    {{$valor->rating}} 
                                                @else
                                                    Não Avaliado
                                                @endif
                                                <br/>
                                                @if (isset($valor->rating))
                                                    @for ($i = 0; $i < intval($valor->rating); $i++)
                                                        <i style="font-size:10pt;color:#fa503a;" class="fas fa-star"></i>
                                                    @endfor
                                                @endif
                                                @if ($valor->rating - intval($valor->rating) > 0)
                                                    <i style="font-size:10pt;color:#fa503a;" class="fas fa-star-half"></i>
                                                @endif
                                            </li>
                                            <li>Filme favorito: @if (isset($valor->favorite_movie_id)) <br/>{{$valor->favMovie['title']}} @else Não informado @endif</li>
                                            <a href="http://localhost:8000/ator/form_edit/{{$valor->id}}" target="_self" title="Editar Detalhes do Ator" rel="next" alt="Editar Detalhes do Ator">  <i class="fas fa-pencil-alt"></i></a> | 
                                            <a href="http://localhost:8000/ator/form_del/{{$valor->id}}" target="_self" title="Apagar Ator" rel="next" alt="Apagar Ator">  <i class="fas fa-trash-alt"></i></a><br/>
                                        </ul>
                                    </div>
                                @endforeach
                                <h3>Quer ver mais? Então clique <a href="{{url('/atores/#todosOsAtores')}}" target="_self" title="Ver todos os atores e atrizes" rel="next" alt="Ver todos os atores e atrizes">aqui</a> e confira a lista de todos os atores e atrizes.</h3>
                            </div>
                        </div>
                    @elseif (isset($nomeBuscado))
                        <div class="bloco-exercicio" id="resultadoBuscaNomeAtor">
                            <div class="enunciado">
                                <h2><i class="fas fa-code"></i> Resultado Busca de Ator por Nome</h2>
                            </div>
                        <div class="resultado">
                            <h3>Não há atores que se chamam <b>{{ $nomeBuscado }}</b>... Por favor, confira o nome inserido no formulário.<br/> Se preferir, clique <a href="{{url('/atores/#todosOsAtores')}}" target="_self" title="Ver todos os atores e atrizes" rel="next" alt="Ver todos os atores e atrizes">aqui</a> para ver a lista de todos os atores e atrizes.</h3>
                        </div>
                    @endif
                <!-- RESULTADO DE BUSCA DE ATOR POR NOME - FIM -->

                <!-- RESULTADO DE BUSCA DE ATOR POR  ID FORM - INÍCIO-->
                    @if (isset($idBuscado) && $atorPorId != null)
                        <div class="bloco-exercicio" id="resultadoBuscaNomeAtor">
                            <div class="enunciado">
                                <h2><i class="fas fa-code"></i> Resultado Busca de Ator por Id</h2>
                            </div>
                            <div class="resultado">
                                <h2>Encontramos um ator/atriz com o id {{$idBuscado}}!</h2>
                                <h3>Confira os resultados para o id <b>{{ $idBuscado }}</b>:</h3>
                                <div class="profile">
                                    <img class="profile-pic" src="@if ($atorPorId[0]->picture_url != null) {{$atorPorId[0]->picture_url}} @else https://us.123rf.com/450wm/berkut2011/berkut20111506/berkut2011150600452/41143316-stock-vector-man-in-suit-secret-service-agent-icon.jpg?ver=6 @endif" title="{{$atorPorId[0]->first_name}} {{$atorPorId[0]->last_name}}" alt="{{$atorPorId[0]->first_name}} {{$atorPorId[0]->last_name}}" height="150" width="150">
                                    <ul class="lista profile-desc">
                                        <li>Nome: {{$atorPorId[0]->first_name}}</li>
                                        <li>Sobrenome: {{$atorPorId[0]->last_name}}</li>
                                        <li>Avaliação: 
                                            @if (isset($atorPorId[0]->rating))
                                                {{$atorPorId[0]->rating}} 
                                            @else
                                                Não Avaliado
                                            @endif
                                            <br/>
                                            @if (isset($atorPorId[0]->rating))
                                                @for ($i = 0; $i < intval($atorPorId[0]->rating); $i++)
                                                    <i style="font-size:10pt;color:#fa503a;" class="fas fa-star"></i>
                                                @endfor
                                            @endif
                                            @if ($atorPorId[0]->rating - intval($atorPorId[0]->rating) > 0)
                                                <i style="font-size:10pt;color:#fa503a;" class="fas fa-star-half"></i>
                                            @endif
                                        </li>
                                        <li>Filme favorito: @if (isset($atorPorId[0]->favorite_movie_id)) <br/>{{$atorPorId[0]->favMovie['title']}} @else Não informado @endif</li>
                                        <br/>
                                        <a href="http://localhost:8000/ator/form_edit/{{$atorPorId[0]->id}}" target="_self" title="Editar Detalhes do Ator" rel="next" alt="Editar Detalhes do Ator">  <i class="fas fa-pencil-alt"></i></a> | 
                                        <a href="http://localhost:8000/ator/form_del/{{$atorPorId[0]->id}}" target="_self" title="Apagar Ator" rel="next" alt="Apagar Ator">  <i class="fas fa-trash-alt"></i></a><br/>
                                    </ul>
                                </div>
                                <h3>Quer ver mais? Então clique <a href="{{url('/atores/#todosOsAtores')}}" target="_self" title="Ver todos os atores e atrizes" rel="next" alt="Ver todos os atores e atrizes">aqui</a> e confira a lista de todos os atores e atrizes.</h3>
                            </div>
                        </div>
                    @elseif (isset($idBuscado))
                        <div class="bloco-exercicio" id="resultadoBuscaIdAtor">
                            <div class="enunciado">
                                <h2><i class="fas fa-code"></i> Resultado Busca de Ator por Id</h2>
                            </div>
                        <div class="resultado">
                            <h3>Não há atores com o id <b>{{ $idBuscado }}</b>... Por favor, confira o id inserido no formulário.<br/>Se preferir, clique <a href="{{url('/atores/#todosOsAtores')}}" target="_self" title="Ver todos os atores e atrizes" rel="next" alt="Ver todos os atores e atrizes">aqui</a> para ver a lista de todos os atores e atrizes.</h3>
                        </div>
                    @endif
                <!-- RESULTADO DE BUSCA DE ATOR POR ID FORM - FIM -->
                
                <!-- RESULTADO BUSCA ATOR POR LINK ID - INÍCIO-->
                @if (isset($atorPorLinkId))
                    <div class="bloco-exercicio" id="resultadoBuscaAtorId">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Detalhes de {{ $atorPorLinkId->first_name . ' ' . $atorPorLinkId->last_name }}</h2>
                        </div>
                        <div class="resultado">
                            <h3>O ator/atriz de id <b>{{ $atorPorLinkId->id }}</b> se chama <b>{{ $atorPorLinkId->first_name .' '. $atorPorLinkId->last_name }}</b>.</h3>
                            <h3>Confira abaixo os detalhes sobre {{ $atorPorLinkId->first_name}}:</h3>
                            <div class="profile">
                                <img class="profile-pic" src="@if ($atorPorLinkId->picture_url != null) {{$atorPorLinkId->picture_url}} @else https://us.123rf.com/450wm/berkut2011/berkut20111506/berkut2011150600452/41143316-stock-vector-man-in-suit-secret-service-agent-icon.jpg?ver=6 @endif" title="{{$atorPorLinkId->first_name}} {{$atorPorLinkId->last_name}}" alt="{{$atorPorLinkId->first_name}} {{$atorPorLinkId->last_name}}" height="150" width="150">
                                <ul class="lista profile-desc">
                                    <li>Nome: {{$atorPorLinkId->first_name}}</li>
                                    <li>Sobrenome: {{$atorPorLinkId->last_name}}</li>
                                    <li>Avaliação:
                                        @if (isset($atorPorLinkId->rating))
                                            {{$atorPorLinkId->rating}} 
                                        @else
                                            Não Avaliado
                                        @endif
                                        <br/>
                                        @if (isset($atorPorLinkId->rating))
                                            @for ($i = 0; $i < intval($atorPorLinkId->rating); $i++)
                                                <i style="font-size:10pt;color:#fa503a;" class="fas fa-star"></i>
                                            @endfor
                                        @endif
                                        @if ($atorPorLinkId->rating - intval($atorPorLinkId->rating) > 0)
                                            <i style="font-size:10pt;color:#fa503a;" class="fas fa-star-half"></i>
                                        @endif
                                    </li>
                                    <li>Filme favorito: @if (isset($atorPorLinkId->favorite_movie_id)) <br/>{{$atorPorLinkId->favMovie['title']}} @else Não informado @endif</li>
                                    <a href="http://localhost:8000/ator/form_edit/{{$atorPorLinkId->id}}" target="_self" title="Editar Detalhes do Ator" rel="next" alt="Editar Detalhes do Ator">  <i class="fas fa-pencil-alt"></i></a> | 
                                    <a href="http://localhost:8000/ator/form_del/{{$atorPorLinkId->id}}" target="_self" title="Apagar Ator" rel="next" alt="Apagar Ator">  <i class="fas fa-trash-alt"></i></a><br/>
                                </ul>
                            </div>
                            <h3>Quer ver mais? Então clique <a href="{{url('/atores/#todosOsAtores')}}" target="_self" title="Ver todos os atores e atrizes" rel="next" alt="Ver todos os atores e atrizes">aqui</a> e confira a lista de todos os atores e atrizes.</h3>
                        </div>
                    </div>
                @elseif (isset($idLinkBuscado))
                    <div class="bloco-exercicio" id="resultadoBuscaAtorId">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Resultado da Busca de Ator por Id</h2>
                        </div>
                        <div class="resultado">
                            <h3>Ops! Parece que não há nenhum ator nem atriz com id <b>{{ $idLinkBuscado }}</b>. Clique <a href="{{url('/atores/#todosOsAtores')}}" target="_self" title="Ver todos os atores e atrizes" rel="next" alt="Ver todos os atores e atrizes">aqui</a> para ver a lista de todos os atores e atrizes.</h3>
                        </div>
                    </div>
                @endif
                <!-- RESULTADO BUSCA ATOR POR LINK ID - FIM -->

                <!-- BUSCAR ATOR POR NOME - INÍCIO-->
                <div class="bloco-exercicio" id="buscaAtorNome">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Buscar Atriz/Ator por Nome</h2>
                    </div>
                    <div class="resultado">
                        <form action="/ator/buscarNomeAtor" method="post">
                            {{ csrf_field() }}
                            {{ method_field('post')}}
                            <label for="nomeAtor">Digite o nome do Ator ou da Atriz que está buscando</label>
                            <br/>
                            <br/>
                            @if (!isset($nomeAtor) && isset($nomeBuscado))
                            <input type="text" placeholder="Insira o nome do ator ou da atriz buscado" id="nomeAtor" name="nomeAtor" title="Insira o nome da atriz ou do ator buscado" value="{{ $nomeBuscado }}">
                            @else
                            <input type="text" placeholder="Insira o nome do ator buscado" id="nomeAtor" name="nomeAtor" title="Insira o nome do ator/atriz buscado">
                            @endif
                            <input type="submit" id="buscaAtorNomeSubmit" value="Buscar Ator" title="Clique aqui para buscar a atriz ou o ator desejado (após preencher seu nome no campo ao lado)">
                            <input type="submit" value="Limpar Busca" title="Clique aqui para refazer a busca do ator/atriz desejado">
                        </form>
                    </div>
                </div>
                <!-- BUSCAR ATOR POR NOME - FIM -->

                <!-- BUSCAR ATOR POR ID - INÍCIO-->
                <div class="bloco-exercicio" id="buscaIdAtor">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Buscar Atriz/Ator por Id</h2>
                    </div>
                    <div class="resultado">
                        <form action="/ator/buscarIdAtor" method="post">
                            {{ csrf_field() }}
                            {{ method_field('post')}}
                            <label for="idAtor">Digite o id do Ator ou da Atriz que está buscando</label>
                            <br/>
                            <br/>
                            @if (!isset($idAtor) && isset($idBuscado))
                            <input type="text" placeholder="Insira o id do ator ou da atriz buscado" id="idAtor" name="idAtor" title="Insira o id da atriz ou do ator buscado" value="{{ $idBuscado }}">
                            @else
                            <input type="text" placeholder="Insira o id do ator ou da atriz buscado" id="idAtor" name="idAtor" title="Insira o id do ator/atriz buscado">
                            @endif
                            <input type="submit" id="buscaAtorIdSubmit" value="Buscar Ator" title="Clique aqui para buscar a atriz ou o ator desejado (após preencher seu id no campo ao lado)">
                            <input type="submit" value="Limpar Busca" title="Clique aqui para refazer a busca do ator/atriz desejado">
                        </form>
                    </div>
                </div>
                <!-- BUSCAR ATOR POR ID - FIM -->


                <!-- LISTAR TODOS OS ATORES - INÍCIO-->
                <!-- @if (isset($atores)) -->
                    <div class="bloco-exercicio" id="todosOsAtores">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Lista de Todos os Atores</h2>
                        </div>
                        <div class="resultado">
                            <ul class="lista">
                                @foreach ($atores as $index=>$valor)
                                    <br/>
                                    <li>
                                        <b>{{ $valor['first_name'] }} {{ $valor['last_name'] }}</b><br/>
                                        <small>Opções: </small> 
                                        <a href="http://localhost:8000/ator/{{$valor['id']}}#resultadoBuscaAtorId" target="_self" title="Acessar Detalhes do Ator" rel="next" alt="Acessar Detalhes do Ator"><i class="fas fa-plus-circle"></i></a> |   
                                        <a href="http://localhost:8000/ator/form_edit/{{$valor['id']}}" target="_self" title="Editar Detalhes do Ator" rel="next" alt="Editar Detalhes do Ator">  <i class="fas fa-pencil-alt"></i></a> | 
                                        <a href="http://localhost:8000/ator/form_del/{{$valor['id']}}" target="_self" title="Apagar Ator" rel="next" alt="Apagar Ator">  <i class="fas fa-trash-alt"></i></a>
                                    </li>
                                    <br/>
                                @endforeach
                            </ul>
                            <br/>
                            {{$atores->links()}}
                        </div>
                    </div>
                <!-- @endif -->
                <!-- LISTAR TODOS OS ATORES - FIM -->


                </div>
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
