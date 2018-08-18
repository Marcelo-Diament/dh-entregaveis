<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aula 38 | Laravel IV</title>

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
                        Aula 38 | Laravel IV
                    </a>
                </div>
                <!-- EXERCCÍCIO 01 C (validando erros no envio) - INÍCIO-->
                @if (isset($filmeSalvo) && isset($novoFilme))
                    <div class="bloco-exercicio" id="37-5-a">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Exercícios 01 | Adicionar Filme por Formulário</h2>
                        </div>
                        <div class="resultado">
                            <h3>O filme <b>{{$novoFilme->title}}</b> foi salvo com sucesso! Confira os detalhes a seguir:</h3>
                            <ul class="lista profile-desc">
                                <li>Título: <b>{{$novoFilme->title}}</b> @if (isset($novoFilme->release_date)) <small> ({{ mb_substr($novoFilme->release_date,0,4) }}) </small> @endif</li>
                                <li>Duração: @if (isset($novoFilme->length)) {{$novoFilme->length}}' @else Não avaliado @endif</li>
                                <li>Avaliação: @if (isset($novoFilme->rating)) {{$novoFilme->rating}} @else Não avaliado @endif</li>
                                <li>Prêmios: @if (isset($novoFilme->awards)) {{$novoFilme->awards}} @else Parece que não receberam prêmios @endif</li>
                                <li>Gênero: @if (isset($novoFilme->genre_id)) {{$novoFilme->genero['name']}} (id: {{$novoFilme->genre_id}}) @else Não informado @endif</li>
                            </ul>
                            <br/>
                            <br/>
                            <form action="/filmes" method="get">
                                <input type="submit" value="Ver Todos os Filmes">
                            </form>
                            <br/>
                            <form action="/form" method="get">
                                <input type="submit" value="Adicionar Mais um Filme">
                            </form>
                        </div>
                    </div>
                @endif

                @if (count($errors) > 0)

                    <div class="bloco-exercicio" id="37-5-a">
                        <div class="enunciado">
                            <h2><i class="fas fa-code"></i> Exercícios 01 | Adicionar Filme por Formulário</h2>
                        </div>
                        <div class="resultado">
                            <h3>Ops! Infelizmente o filme não pôde ser salvo. Por favor, verifique os erros apontados a seguir e tente novamente.</h3>
                            <ol class="lista">
                                @foreach ($errors->all() as $error)
                                  <li><h4><b>{{ $error }}</b></h4></li>
                                @endforeach
                            </ol>
                            <br/>
                            <form action="/filmes" method="get">
                                <input type="submit" value="Ver Todos os Filmes">
                            </form>
                            <br/>
                            <form action="/form#38-1" method="get">
                                <input type="submit" value="Adicionar Novo Filme">
                            </form>
                        </div>
                    </div>

                @endif
                <!-- EXERCCÍCIO 01 C (validando erros no envio) - FIM -->

                <!-- INÍCIO CUSTOM WELCOME -->
                <div class="bloco-exercicio" id="38-1">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Exercício 01 | Formulário</h2>
                    </div>
                    <div class="resultado">
                        <h3>Acesse os exercícios através do menu abaixo.</h3>
                        <div class="indice">


                            <!-- FORMULÁRIO ADICIONAR FILMES - INÍCIO -->
                            <form id="adicionarFilme" name="adicionarFilme" action ="/adicionarFilme" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('post')}}
                                <div class="">
                                    <label for="nomeFilme">Título</label>
                                    <br/>
                                    @if ($errors->has('title'))
                                        <input style="background-color:#fa503a;color:#fff" type="text" name="title" id="nomeFilme" placeholder="Insira aqui o título do filme" required value="{{ old('title') }}"/>
                                    @else
                                        <input type="text" name="title" id="nomeFilme" placeholder="Insira aqui o título do filme" required value="{{ old('title') }}"/>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="avaliacaoFilme">Avaliação (0 - 10)</label>
                                    <br/>
                                    @if ($errors->has('rating'))
                                        <input style="background-color:#fa503a;color:#fff" type="number" name="rating" id="avaliacaoFilme" placeholder="Insira aqui a avaliação" min="0" max="10" step="0.1" required value="{{ old('rating') }}"/>
                                    @else
                                        <input type="number" name="rating" id="avaliacaoFilme" placeholder="Insira aqui a avaliação" min="0" max="10" step="0.1" required value="{{ old('rating') }}"/>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="premios">Prêmios</label>
                                    <br/>
                                    @if ($errors->has('awards'))
                                        <input style="background-color:#fa503a;color:#fff;" type="number" name="awards" id="premios" placeholder="Insira aqui a quantidade de prêmios" step="1" required value="{{ old('awards') }}"/>
                                    @else
                                        <input type="number" name="awards" id="premios" placeholder="Insira aqui a quantidade de prêmios" step="1" required value="{{ old('awards') }}"/>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="duracao">Duração (minutos)</label>
                                    <br/>
                                    @if ($errors->has('length'))
                                        <input style="background-color:#fa503a;color:#fff" type="number" name="length" id="duracao" placeholder="Insira aqui a duração (em minutos)" step="1" required value="{{ old('length') }}"/>
                                    @else
                                        <input type="number" name="length" id="duracao" placeholder="Insira aqui a duração (em minutos)" step="1" required value="{{ old('length') }}"/>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="dataEstreia">Data de Estréia</label>
                                    <br/>
                                    @if ($errors->has('release_date'))
                                        <input style="background-color:#fa503a;color:#fff" type="datetime-local" name="release_date" id="dataEstreia" required value="{{ old('release_date') }}"/>
                                    @else
                                        <input type="datetime-local" name="release_date" id="dataEstreia" required value="{{ old('release_date') }}"/>
                                    @endif
                                </div>
                                <div class="">
                                    <label for="generoId">Gênero</label>
                                    <br/>
                                    @if ($errors->has('genre_id'))
                                    <select style="background-color:#fa503a;color:#fff" name="generoId" form="adicionarFilme">
                                        <option selected disabled>Selecione o gênero do filme</option>
                                        {{ $options = App\Genre::all()->pluck('name', 'id') }}
                                        @foreach ($options as $id=>$value) 
                                            <option value="{{ $id }}">{{ $id }} - {{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @else
                                    <select name="generoId" form="adicionarFilme">
                                        <option selected disabled>Selecione o gênero do filme</option>
                                        {{ $options = App\Genre::all()->pluck('name', 'id') }}
                                        @foreach ($options as $id=>$value) 
                                            <option value="{{ $id }}">{{ $id }} - {{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </div>
                                <br>
                                <div class="">
                                  <input type="submit" value="Adicionar Filme" name="adicionar-filme" class=""/>
                                </div>
                            </form>
                            <!-- FORMULÁRIO ADICIONAR FILMES - FIM -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
