<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aula 44 | Laravel IX | Adicionar Ator</title>

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
                        Aula 44 | Laravel IX | Adicionar Ator
                    </a>
                </div>

                <!-- VALIDAÇÃO - INÍCIO-->
                @if (isset($atorJaCadastrado))
                <br/>
                    <div class="bloco-exercicio" id="resultadoAtorAddFail">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Ops...</h2>
                        </div>
                        <div class="resultado">
                            <h3>Parece que o ator/atriz <b>{{$nomeCompleto}}</b> já está cadastrado(a)! Verifique a <a href="{{url('/atores#todosOsAtores')}}" target="_self" title="Ver Lista de Atores" rel="next" alt="Ver Lista de Atores">lista</a> de todos os atores cadastrados.</h3>
                            <br/>
                            <div class="profile">
                                <img class="profile-pic" src="@if ($atorExistente[0]['picture_url'] != null) {{$atorExistente[0]['picture_url']}} @else https://us.123rf.com/450wm/berkut2011/berkut20111506/berkut2011150600452/41143316-stock-vector-man-in-suit-secret-service-agent-icon.jpg?ver=6 @endif" title="{{$atorExistente[0]['first_name']}} {{$atorExistente[0]['last_name']}}" alt="{{$atorExistente[0]['first_name']}} {{$atorExistente[0]['last_name']}}" height="150" width="150">
                                <ul class="lista profile-desc">
                                    <li>Nome: {{$atorExistente[0]['first_name']}}</li>
                                    <li>Sobrenome: {{$atorExistente[0]['last_name']}}</li>
                                    <li>Avaliação: 
                                        @if (isset($atorExistente[0]['rating']))
                                            {{$atorExistente[0]['rating']}} 
                                        @else
                                            Não Avaliado
                                        @endif
                                        <br/>
                                        @if (isset($atorExistente[0]['rating']))
                                            @for ($i = 0; $i < intval($atorExistente[0]['rating']); $i++)
                                                <i style="font-size:10pt;color:#fa503a;" class="fas fa-star"></i>
                                            @endfor
                                        @endif
                                        @if ($atorExistente[0]['rating'] - intval($atorExistente[0]['rating']) > 0)
                                            <i style="font-size:10pt;color:#fa503a;" class="fas fa-star-half"></i>
                                        @endif
                                    </li>
                                    <li>Filme favorito: @if (isset($atorExistente[0]['favorite_movie_id'])) <br/>{{$atorExistente[0]['favMovie']['title']}} @else Não informado @endif</li>
                                </ul>
                            </div>
                            <br/>
                            <div class="botoes-inline">
                                <form action="/atores#todosOsAtores" method="get">
                                    <input type="submit" value="Ver Todos os Atores">
                                </form>
                                <br/>
                                <form action="/add#adicionarAtorEnunciado" method="get">
                                    <input type="submit" value="Adicionar Novo Ator">
                                </form>
                            </div>
                        </div>
                    </div>
                @elseif (isset($atorSalvo) && isset($novoAtor))
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

                @if (count($errors) > 0)
                    <div class="bloco-exercicio" id="resultadoAtorAddFail">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Ops...</h2>
                        </div>
                        <div class="resultado">
                            <h3>Infelizmente o ator/atriz não pôde ser salvo. Por favor, verifique os erros apontados a seguir e tente novamente.</h3>
                            <ol class="lista">
                                @foreach ($errors->all() as $error)
                                  <li><h4><b>{{ $error }}</b></h4></li>
                                @endforeach
                            </ol>
                            <br/>
                            <form action="/atores#todosOsAtores" method="get">
                                <input type="submit" value="Ver Todos os Atores">
                            </form>
                            <br/>
                            <form action="/add#adicionarAtorEnunciado" method="get">
                                <input type="submit" value="Adicionar Novo Ator">
                            </form>
                        </div>
                    </div>
                @endif
                <!-- VALIDAÇÃO - FIM -->

                <!-- LISTAR TODOS OS ATORES - INÍCIO-->
                @if (isset($atorSalvo) && isset($novoAtor))
                    <div class="bloco-exercicio" id="todosOsAtores">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Lista de Todos os Atores</h2>
                        </div>
                        <div class="resultado">
                            <ul class="lista">
                                @foreach ($atores as $index=>$valor)
                                    <li>{{ $valor['first_name'] }} {{ $valor['last_name'] }} <a href="http://localhost:8000/ator/{{$valor['id']}}#resultadoBuscaAtorId" target="_self" title="Acessar Detalhes do Ator" rel="next" alt="Acessar Detalhes do Ator"><i class="fas fa-plus-circle"></i></a></li><br/>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <!-- LISTAR TODOS OS ATORES - FIM -->

                <!-- INÍCIO CUSTOM WELCOME -->
                <div class="bloco-exercicio" id="adicionarAtorEnunciado">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Adicionar Novo Ator</h2>
                    </div>
                    <div class="resultado">
                        <h3>Preencha o formulário a seguir para adicionar seu novo ator</h3>
                        <br/>
                        <small><b>Atenção:</b> para simular um erro, insira uma avaliação maior que 10 e menor que 11 (como 10,5).</small>
                        <br/>
                        <br/>
                        <br/>
                        <div class="indice">


                            <!-- FORMULÁRIO ADICIONAR ATOR - INÍCIO -->
                            <form id="adicionarAtor" name="adicionarAtor" action ="/adicionarAtor" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('post')}}
                                <div class="">
                                    <label for="nomeAtor">Nome</label>
                                    <br/>
                                    @if ($errors->has('first_name'))
                                        <input style="background-color:#fa503a;color:#fff" type="text" name="first_name" id="nomeAtor" placeholder="Insira aqui o nome do ator" required value="{{ old('first_name') }}"/>
                                    @else
                                        <input type="text" name="first_name" id="nomeAtor" placeholder="Insira aqui o nome do ator" required value="{{ old('first_name') }}"/>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="sobrenomeAtor">Sobrenome</label>
                                    <br/>
                                    @if ($errors->has('last_name'))
                                        <input style="background-color:#fa503a;color:#fff" type="text" name="last_name" id="sobrenomeAtor" placeholder="Insira aqui o sobrenome do ator" required value="{{ old('last_name') }}"/>
                                    @else
                                        <input type="text" name="last_name" id="sobrenomeAtor" placeholder="Insira aqui o sobrenome do ator" required value="{{ old('last_name') }}"/>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="avaliacaoAtor">Avaliação (0 - 10)</label>
                                    <br/>
                                    @if ($errors->has('rating'))
                                        <input style="background-color:#fa503a;color:#fff" type="number" name="rating" id="avaliacaoAtor" placeholder="Insira aqui a avaliação" min="0" max="10" step="0.1" required value="{{ old('rating') }}"/>
                                    @else
                                        <input type="number" name="rating" id="avaliacaoAtor" placeholder="Insira aqui a avaliação" min="0" max="11" step="0.1" required value="{{ old('rating') }}"/>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="picture">Link da Imagem do Ator</label>
                                    <small>Busque uma imagem bacana no Google e cole a URL no campo a seguir.</small>
                                    <br/>
                                    @if ($errors->has('picture_url'))
                                        <input style="background-color:#fa503a;color:#fff;" type="text" name="picture_url" id="picture" placeholder="Insira aqui a URL da imagem" value="{{ old('picture_url') }}"/>
                                    @else
                                        <input type="text" name="picture_url" id="picture_url" placeholder="Insira aqui a URL da imagem" value="{{ old('picture_url') }}"/>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="favMovieId">Filme Favorito</label>
                                    <br/>
                                    @if ($errors->has('favorite_movie_id'))
                                    <select style="background-color:#fa503a;color:#fff" name="favorite_movie_id" required form="adicionarAtor">
                                        <option selected disabled>Selecione o filme predileto do ator</option>
                                        {{ $options = App\Movie::all()->pluck('title', 'id') }}
                                        @foreach ($options as $id=>$value) 
                                            <option value="{{ $id }}">{{ $id }} - {{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @else
                                    <select name="favorite_movie_id" form="adicionarAtor">
                                        <option selected disabled>Selecione o filme predileto do ator</option>
                                        {{ $options = App\Movie::all()->pluck('title', 'id') }}
                                        @foreach ($options as $id=>$value) 
                                            <option value="{{ $id }}">{{ $id }} - {{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </div>
                                <br>
                                <div class="">
                                  <input type="submit" value="Adicionar Ator" name="adicionar-ator" class=""/>
                                </div>
                            </form>
                            <!-- FORMULÁRIO ADICIONAR Ator - FIM -->
                        </div>
                    </div>
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
