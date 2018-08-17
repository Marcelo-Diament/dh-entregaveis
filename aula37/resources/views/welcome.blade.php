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

                <!-- INÍCIO CUSTOM WELCOME -->
                <div class="bloco-exercicio">
                    <div class="enunciado">
                        <h2><i class="fas fa-terminal"></i></i> <b>LARAVEL III | Models</b></h2>
                        <small>Professor Especialista: Rodrigo</small>
                        <br/>
                        <small>Professores Digital House: Thiago M. Medeiros, Thomas Staziak</small>
                        <br/>
                        <small>Aula realizada em 02 de Agosto de 2018</small>
                    </div>
                    <div class="resultado">
                        <h3>Acesse os exercícios através do menu abaixo.</h3>
                        <div class="indice">

                            <!-- EXERCÍCIO 1 - INÍCIO -->
                            <ul class="lista">
                                <li>Exercício 1 - Conexão ao Banco de Dados</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li>Conexão a um banco de dados: (durante esta aula, utilizaremos o banco de dados <strike>laravel-database​.sql</strike> movies_db.sql no campus). Modificar o arquivo .env​ no diretório raiz de Laravel com as credenciais de MySQL. Em seguida, reiniciar <code class="inline-code">php artisan serve</code>​ para que aceite as alterações.
                                        </li>
                                        <br/>
                                        <li><a class="sem-uso" href="#" target="_self" title="Exercício Inacessível" rel="nofollow" alt="Exercício Inacessível"><i>Exercícios 1a*</i></a></li>
                                        <small>* Arquivo inacessível, incluso no .gitignore, foram inseridos DB Name, DB User e DB Pass. Em seguida, o artisan server reinicado.</small>
                                        <br/>
                                    </ul>
                                </li>
                            </ul>
                            <!-- EXERCÍCIO 1 - FIM -->

                            <!-- EXERCÍCIO 2 - INÍCIO -->
                            <ul class="lista">
                                <li>Exercício 2 - Modelos</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li>a. Criar um modelo para a tabela Movies​.</li>
                                        <br/>
                                        <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula37/app/Movie.php" target="_blank" title="Acessar Exercício 2 a" rel="next" alt="Acessar Exercício 2 a">Exercício 2a</a></li>
                                        <br/>
                                        <br/>
                                        <li>b. Criar um modelo para a tabela Genres.</li>
                                        <br/>
                                        <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula37/app/Genre.php" target="_blank" title="Acessar Exercício 2 b" rel="next" alt="Acessar Exercício 2 b">Exercício 2b</a></li>
                                        <br/>
                                        <br/>
                                        <li>c. Criar um modelo para a tabela Actors.</li>
                                        <br/>
                                        <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula37/app/Actor.php" target="_blank" title="Acessar Exercício 2 c" rel="next" alt="Acessar Exercício 2 c">Exercício 2c</a></li>
                                        <br/>
                                        <br/>
                                        <li>d. Adicionar ao modelo <strike>Ator​</strike> Actor o método getNomeCompleto​.</li>
                                        <br/>
                                        <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula37/app/Actor.php" target="_blank" title="Acessar Exercício 2 d" rel="next" alt="Acessar Exercício 2 d">Exercício 2d</a></li>
                                        <br/>
                                    </ul>
                                </li>
                            </ul>
                            <!-- EXERCÍCIO 2 - FIM -->

                            <!-- EXERCÍCIO 3 - INÍCIO -->
                            <ul class="lista">
                                <li>Exercício 3 - Acesso ao Banco de Dados</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li>a. Criar o caminho /atores​, que redirecione ao método <strike>AtorController@directory​</strike> ActorsController@directory e retorne a visualização atores.blade.php​.</li>
                                        <br/>
                                        <li><a href="{{url('/atores#37-3a-b-c-h')}}" target="_blank" title="Acessar Exercício 3 a" rel="next" alt="Acessar Exercício 3 a">Exercício 3a</a></li>
                                        <br/>
                                        <br/>
                                        <li>b. Na visualização que acabamos de criar, inserir um título e entrar em localhost:8000/atores​ para verificar se a exibição está correta.</li>
                                        <br/>
                                        <li><a href="{{url('/atores#37-3a-b-c-h')}}" target="_blank" title="Acessar Exercício 3 b" rel="next" alt="Acessar Exercício 3 b">Exercício 3b</a></li>
                                        <small>O ator inserido no BD é o 'Ator Novo' (first_name: Ator, last_name: Novo, id: 50).</small>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <li>c. No controlador que acabamos de criar, utilizando Eloquent, obter todos os atores dentro de uma variável $atores​ e enviá-la à visualização. (Recomendamos utilizar o método All​). Lembrar de inserir a linha “use App\Ator​” para importar o modelo).</li>
                                        <br/>
                                        <li><a href="{{url('/atores#37-3a-b-c-h')}}" target="_blank" title="Acessar Exercício 3 c" rel="next" alt="Acessar Exercício 3 c">Exercício 3c</a></li>
                                        <br/>
                                        <br/>
                                        <li>d. Na visualização <strike>atores.blade.php</strike> filmes.blade.php​, mostrar uma lista dos nomes dos filmes utilizando Blade.</li>
                                        <br/>
                                        <li><a href="{{url('/filmes#37-3d-g')}}" target="_blank" title="Acessar Exercício 3 d" rel="next" alt="Acessar Exercício 3 d">Exercício 3d*</a></li>
                                        <small>* Acredito que a view correta seria /filmes, verifiquei no repositório que criaram de referência. Caso esteja errado, por favor, me avisem.</small>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <li>e. Criar o caminho /ator/{id}​, que redirecione ao método AtorController@show​ e retorne a visualização ator.blade.php​.</li>
                                        <br/>
                                        <li><a href="localhost:8000/ator/INSIRA-AQUI-O-ID-DO-ATOR-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Acessar Exercício 3 e" rel="next" alt="Acessar Exercício 3 e">Exercício 3e</a></li>
                                        <br/>
                                        <br/>
                                        <li>f. No controlador AtorController​, utilizando Eloquent, obter o ator de acordo com o ID recebido por URL. Salvar o ator na variável $ator​ e enviá-la para a visualização. (Recomendamos utilizar o método find​).</li>
                                        <br/>
                                        <li><a href="localhost:8000/ator/INSIRA-AQUI-O-ID-DO-ATOR-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Acessar Exercício 3 f" rel="next" alt="Acessar Exercício 3 f">Exercício 3f</a></li>
                                        <br/>
                                        <br/>
                                        <li>g. Na visualização <strike>atores.blade.php</strike> filmes.blade.php​, utilizando Blade, mostrar todos os dados do filme.</li>
                                        <br/>
                                        <li><a href="{{url('/filmes#37-3d-g')}}" target="_blank" title="Acessar Exercício 3 g" rel="next" alt="Acessar Exercício 3 g">Exercício 3g</a></li>
                                        <br/>
                                        <br/>
                                        <li>h. Modificar a visualização atores.blade.php​ de forma que os nomes dos atores sejam links para os detalhes dos dados de cada um.</li>
                                        <br/>
                                        <li><a href="{{url('/atores#37-3a-b-c-h')}}" target="_blank" title="Acessar Exercício 3 h" rel="next" alt="Acessar Exercício 3 h">Exercício 3h</a></li>
                                        <br/>
                                    </ul>
                                </li>
                            </ul>
                            <!-- EXERCÍCIO 3 - FIM -->

                            <!-- EXERCÍCIO 4 - INÍCIO -->
                            <ul class="lista">
                                <li>Exercício 4 - Buscador</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li>a. Na visualização atores.blade.php​, criar um formulário que tenha apenas um campo de texto. O objetivo desse formulário será encontrar atores. (Levar em conta que o formulário deverá apontar para o caminho /atores/procurar​).</li>
                                        <br/>
                                        <li><a href="{{url('/atores#37-4a-b-c-d')}}" target="_blank" title="Acessar Exercício 4 a" rel="next" alt="Acessar Exercício 4 a">Exercício 4a</a></li>
                                        <br/>
                                        <br/>
                                        <li>b. Criar o caminho /atores/procurar​, que redirecione ao método AtorController@search e retorne a visualização atores.blade.php​.</li>
                                        <br/>
                                        <li><a href="{{url('/atores#37-4a-b-c-d')}}" target="_blank" title="Acessar Exercício 4 b" rel="next" alt="Acessar Exercício 4 b">Exercício 4b</a></li>
                                        <br/>
                                        <br/>
                                        <li>c. No controlador AtorController​, utilizando Eloquent, obter os atores com nomes que contenham os caracteres procurados. Salvar o ator na variável $atores​ e enviá-la para a visualização. (Recomendamos utilizar o método where​).</li>
                                        <br/>
                                        <li><a href="{{url('/atores#37-4a-b-c-d')}}" target="_blank" title="Acessar Exercício 4 c" rel="next" alt="Acessar Exercício 4 c">Exercício 4c</a></li>
                                        <br/>
                                        <br/>
                                        <li>d. Adicionar a atores.blade.php​ mais um formulário com o botão “Limpar”, que leve ao caminho original sem filtros de busca</li>
                                        <br/>
                                        <li><a href="{{url('/atores#37-4a-b-c-d')}}" target="_blank" title="Acessar Exercício 4 d" rel="next" alt="Acessar Exercício 4 d">Exercício 4d</a></li>
                                        <br/>
                                    </ul>
                                </li>
                            </ul>
                            <!-- EXERCÍCIO 4 - FIM -->

                            <!-- EXERCÍCIO 4 - INÍCIO -->
                            <ul class="lista">
                                <li>Exercício 5 - Refatoração</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li>a. Na aula anterior, usamos um array para consultar os filmes. Implementar Eloquent nos seguintes caminhos: /filmes,​ /filmes/{id}​, /filmes/procurar/{texto}​ para consultar diretamente o banco de dados.</li>
                                        <br/>
                                        <li><a href="{{url('/filmes#37-3d-g')}}" target="_blank" title="Acessar Exercício 5 - a" rel="next" alt="Acessar Exercício 5 - a">Exercício 5a - Lista Filmes</a></li>
                                        <br/>
                                        <li><a href="localhost:8000/filmes/procurarId/INSIRA-AQUI-O-ID-DO-FILME-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Acessar Exercício 5 - b" rel="next" alt="Acessar Exercício 5 - b">Exercício 5b - Buscar Filme por Id</a></li>
                                        <br/>
                                    </ul>
                                </li>
                            </ul>
                            <!-- EXERCÍCIO 5 - FIM -->

                            <!-- FUNCIONALIDADES - INÍCIO -->
                            <ul class="lista">
                                <li>Funcionalidades</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li><a href="{{url('/atores#37-3a-b-c-h')}}" target="_blank" title="Ver Lista de Atores" rel="next" alt="Ver Lista de Atores">Ver Lista de Atores</a></li>
                                        <li><a href="{{url('/atores#37-4a-b-c-d')}}" target="_blank" title="Buscar Ator por Nome" rel="next" alt="Buscar Ator por Nome">Buscar Ator Por Nome (formulário)</a></li>
                                        <li><a href="localhost:8000/ator/INSIRA-AQUI-O-ID-DO-ATOR-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Buscar Ator por Id" rel="next" alt="Buscar Ator por Id">Buscar Ator por Id (com detalhes)</a></li>
                                        <li><a href="{{url('/filmes#37-3d-g')}}" target="_blank" title="Ver Lista de Filmes" rel="next" alt="Ver Lista de Filmes">Ver Lista de Filmes (com detalhes)</a></li>
                                        <li><a href="localhost:8000/filmes/procurarId/INSIRA-AQUI-O-ID-DO-FILME-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Buscar Filme por Id" rel="next" alt="Buscar Filme por Id">Buscar Filme por Id (com detalhes)</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- FUNCIONALIDADES - FIM -->
                        </div>
                    </div>
                </div>
                <!-- FIM CUSTOM WELCOME -->
                
                <!-- INÍCIO MVC -->
                <div class="bloco-exercicio">
                    <div class="enunciado">
                        <h2><i class="fas fa-terminal"></i></i> MVC + Routes + ReadMe + Repositório</h2>
                        <p>Clique para acessar os Models, Views, Controllers, Routes, o arquivo README.md (geral) e o repositório da aula</p>
                    </div>
                    <div class="resultado">
                        <ul class="menu">
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula37/app" target="_blank" title="Acessar Models" rel="external" alt="Acessar Models"><i class="fas fa-database"></i></a></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/tree/master/aula37/resources/views" target="_blank" title="Acessar Views" rel="external" alt="Clique para acessar as Views"><i class="fas fa-eye"></i></a></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula37/app/Http/Controllers" target="_blank" title="Acessar Controllers" rel="external" alt="Clique para acessar os Controllers"><i class="fas fa-cog"></i></a></li>
                            <li><h3>+</h3></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula37/routes" target="_blank" title="Acessar Routes" rel="external" alt="Clique para acessar as Routes"><i class="fas fa-project-diagram"></i></a></li>
                            <li><h3>+</h3></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/README.md" target="_blank" title="Acessar README.md" rel="help" alt="Clique para acessar o arquivo README.md"><i class="fas fa-info"></i></a></li>
                            <li><h3>+</h3></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/tree/master/aula37" target="_blank" title="Acessar o repositório" rel="external" alt="Clique para acessar o repositório"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- FIM MVC -->

                <!-- INÍCIO TECNOLOGIAS -->
                <div class="bloco-exercicio">
                    <div class="enunciado">
                        <h2><i class="fas fa-terminal"></i></i> Tecnologias Utilizadas</h2>
                        <p>Clique para acessar o site oficial e/ou documentação</p>
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
        </div>
    </body>
</html>
