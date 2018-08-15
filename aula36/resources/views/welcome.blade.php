<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aula 36 | Laravel II</title>

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
                display: flex;
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
                        Aula 36 | Laravel II
                    </a>
                </div>

                <!-- INÍCIO CUSTOM WELCOME -->
                <div class="bloco-exercicio">
                    <div class="enunciado">
                        <h2><i class="fas fa-terminal"></i></i> <b>LARAVEL II | MVC</b></h2>
                        <small>Professor Especialista: Rodrigo</small>
                        <br/>
                        <small>Professores Digital House: Thiago M. Medeiros, Thomas Staziak</small>
                        <br/>
                        <small>Aula realizada em 31 de Julho de 2018</small>
                    </div>
                    <div class="resultado">
                        <h3>Acesse os exercícios através do menu abaixo.</h3>
                        <div class="indice">
                            <ul class="lista">
                                <li>Exercício 1</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li><a href="{{url('/filmes/#36-1a-b')}}" target="_blank" title="Acessar Exercício 1 a" rel="next" alt="Acessar Exercício 1 a">Exercício 1a</a></li>
                                        <li><a href="{{url('/filmes/#36-1a-b')}}" target="_blank" title="Acessar Exercício 1 b" rel="next" alt="Acessar Exercício 1 b">Exercício 1b</a></li>
                                        <li><a href="{{url('/filmes/#36-1c')}}" target="_blank" title="Acessar Exercício 1 c" rel="next" alt="Clique para acessar Acessar Exercício 1 c">Exercício 1c</a></li>
                                        <br/>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="lista">
                                <li>Exercício 2</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li><a href="{{url('/filmes/#36-2a-b-c-d')}}" target="_blank" title="Acessar Exercício 2 a" rel="next" alt="Acessar Exercício 2 a">Exercício 2a</a></li>
                                        <li><a href="{{url('/filmes/#36-2a-b-c-d')}}" target="_blank" title="Acessar Exercício 2 b" rel="next" alt="Acessar Exercício 2 b">Exercício 2b</a></li>
                                        <li><a href="{{url('/filmes/#36-2a-b-c-d')}}" target="_blank" title="Acessar Exercício 2 c" rel="next" alt="Acessar Exercício 2 c">Exercício 2c</a></li>
                                        <li><a href="{{url('/filmes/#36-2a-b-c-d')}}" target="_blank" title="Acessar Exercício 2 d" rel="next" alt="Acessar Exercício 2 d">Exercício 2d</a></li>
                                        <li><a href="{{url('/filmes/#36-2e')}}" target="_blank" title="Acessar Exercício 2 e" rel="next" alt="Acessar Exercício 2 e">Exercício 2e</a></li>
                                        <li><a href="{{url('/todosOsFilmes/#36-2f')}}" target="_blank" title="Acessar Exercício 2 f" rel="next" alt="Acessar Exercício 2 f">Exercício 2f</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="lista">
                                <li>Funcionalidades</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li><a href="{{url('/todosOsFilmes')}}" target="_blank" title="Ver todos os filmes" rel="next" alt="Ver todos os filmes">Listar Filmes</a></li>
                                        <li><a href="localhost:8000/filmes/procurarId/INSIRA-AQUI-O-TÍTULO-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Buscar filme por id" rel="next" alt="Buscar filme por id">Buscar por Id de Filme</a></li>
                                        <li><a href="localhost:8000/filmes/procurarTitulo/INSIRA-AQUI-O-TÍTULO-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Buscar filme por título" rel="next" alt="Buscar filme por título">Buscar por Título de Filme</a></li>
                                        <li><a href="localhost:8000/adicionarFilme/INSIRA-AQUI-O-TÍTULO-DO-NOVO-FILME-E-DEPOIS-APERTE-ENTER" target="_blank" title="Incluir novo filme" rel="next" alt="Incluir novo filme">Adicionar Título de Filme</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- FIM CUSTOM WELCOME -->
                
                <!-- INÍCIO MVC -->
                <div class="bloco-exercicio">
                    <div class="enunciado">
                        <h2><i class="fas fa-terminal"></i></i> MVC + Routes + ReadMe + Repositório</h2>
                    </div>
                    <div class="resultado">
                        <ul class="menu">
                            <li><a href="#" target="_blank" title="Esse exercício não utilizou Models" rel="external" alt="Esse exercício não utilizou Models"><i class="fas fa-database sem-uso"></i></a></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/tree/master/aula36/resources/views" target="_blank" title="Acessar Views" rel="external" alt="Clique para acessar as Views"><i class="fas fa-eye"></i></a></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula36/app/Http/Controllers" target="_blank" title="Acessar Controllers" rel="external" alt="Clique para acessar os Controllers"><i class="fas fa-cog"></i></a></li>
                            <li><h3>+</h3></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula36/routes" target="_blank" title="Acessar Routes" rel="external" alt="Clique para acessar as Routes"><i class="fas fa-project-diagram"></i></a></li>
                            <li><h3>+</h3></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/README.md" target="_blank" title="Acessar README.md" rel="help" alt="Clique para acessar o arquivo README.md"><i class="fas fa-info"></i></a></li>
                            <li><h3>+</h3></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/tree/master/aula36" target="_blank" title="Acessar o repositório" rel="external" alt="Clique para acessar o repositório"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- FIM MVC -->

                <!-- INÍCIO TECNOLOGIAS -->
                <div class="bloco-exercicio">
                    <div class="enunciado">
                        <h2><i class="fas fa-terminal"></i></i> Tecnologias Utilizadas</h2>
                    </div>
                    <div class="resultado">
                        <ul class="menu">
                            <li><a href="https://laravel.com/" target="_blank" title="Laravel" rel="external" alt="Tecnologia Utilizada: Laravel"><i class="fab fa-laravel"></i></i></a></li>
                            <li><a href="https://developer.mozilla.org/pt-BR/docs/Web/HTML/HTML5" target="_blank" title="HTML5" rel="external" alt="Tecnologia Utilizada: HTML5"><i class="fab fa-html5"></i></i></a></li>
                            <li><a href="https://developer.mozilla.org/pt-BR/docs/Web/CSS" target="_blank" title="CSS3" rel="external" alt="Tecnologia Utilizada: CSS3"><i class="fab fa-css3-alt"></i></i></a></li>
                            <li><a href="http://php.net/docs.php" target="_blank" title="php" rel="external" alt="Tecnologia Utilizada: php"><i class="fab fa-php"></i></a></li>
                            <li><a href="https://github.com/" target="_blank" title="GitHub" rel="external" alt="Tecnologia Utilizada: GitHub"><i class="fab fa-github"></i></a></li>
                            <li><a href="https://fontawesome.com/" target="_blank" title="Font Awesome" rel="external" alt="Tecnologia Utilizada: Font Awesome"><i class="fab fa-font-awesome"></i></i></a></li>
                            <br/>
                            
                        </ul>
                    </div>
                </div>
                <!-- FIM TECNOLOGIAS -->

        </div>
    </body>
</html>
