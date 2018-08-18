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
                        Aula 38 | Laravel IV
                    </a>
                </div>

                <!-- INÍCIO CUSTOM WELCOME -->
                <div class="bloco-exercicio">
                    <div class="enunciado">
                        <h2><i class="fas fa-terminal"></i> <b>LARAVEL IV | Request</b></h2>
                        <small>Professor Especialista: Rodrigo</small>
                        <br/>
                        <small>Professores Digital House: Thiago M. Medeiros, Thomas Staziak</small>
                        <br/>
                        <small>Aula realizada em 06 de Agosto de 2018</small>
                    </div>
                    <div class="resultado">
                        <h3>Acesse os exercícios através do menu abaixo.</h3>
                        <div class="indice">

                            <!-- EXERCÍCIO 1 - INÍCIO -->
                            <ul class="lista">
                                <li>Exercício 1 - Validações</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li>a. Utilizar o formulário que está no Campus Virtual para adicionar filmes e validar se todos os campos são obrigatórios e que mostre os erros de validação se houver.</li>
                                        <br/>
                                        <li><a class="" href="{{url('/form')}}" target="_self" title="Exercício 1a" rel="nofollow" alt="Exercício 1a">Exercício 1a</a></li>
                                        <br/>
                                        <br/>
                                        <li>b. Adicionar regras que permitam validar se todos os tipos de dados estão corretos, bem como os mínimos e máximos.</li>
                                        <br/>
                                        <li><a class="" href="{{url('/form')}}" target="_self" title="Exercício 1b" rel="nofollow" alt="Exercício 1b">Exercício 1b</a></li>
                                        <br/>
                                        <br/>
                                        <li>c. Modificar o formulário para que, caso haja um erro, recupere os campos que o usuário já tinha preenchido.</li>
                                        <br/>
                                        <li><a class="" href="{{url('/form')}}" target="_self" title="Exercício 1c" rel="nofollow" alt="Exercício 1c">Exercício 1c</a></li>
                                        <br/>
                                        <br/>
                                        <li>d. Criar um novo formulário para adicionar atores, junto com o caminho /actors/add​ e a visualização actors/add.blade.php (levar em conta que o formulário deverá apontar para o caminho /actors/add​).</li>
                                        <br/>
                                        <li><a class="" href="#" target="_self" title="Exercício 1d" rel="nofollow" alt="Exercício 1d">Exercício 1d</a></li>
                                        <br/>
                                        <br/>
                                        <li>e. Repetir as regras de validação dos pontos a, b e c do exercício usando o novo formulário.</li>
                                        <br/>
                                        <li><a class="" href="#" target="_self" title="Exercício 1e" rel="nofollow" alt="Exercício 1e">Exercício 1e</a></li>
                                        <br/>
                                        <br/>
                                        <li>f. Ao criar um filme ou um ator, confirmar se não existe outro/a com o mesmo nome. </li>
                                        <br/>
                                        <li><a class="" href="{{url('/form')}}" target="_self" title="Exercício 1f" rel="nofollow" alt="Exercício 1f">Exercício 1f</a></li>
                                        <br/>
                                        <br/>
                                    </ul>
                                </li>
                            </ul>
                            <!-- EXERCÍCIO 1 - FIM -->

                            <!-- EXERCÍCIO 2 - INÍCIO -->
                            <ul class="lista">
                                <li>Exercício 2 - Método Eloquent</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li>a. Criar o caminho POST /actors/add​, junto com o método ActorController@add. Este método deverá salvar os dados do novo ator e depois redirecionar ao caminho /actors ​que deve listar todos os atores. (Recomendamos utilizar o método create ​conforme nos slides).</li>
                                        <br/>
                                        <li><a class="" href="#" target="_self" title="Exercício 2a" rel="nofollow" alt="Exercício 2a">Exercício 2a</a></li>
                                        <br/>
                                        <br/>
                                        <li>b. Criar o caminho /actor/form_edit/{id}​, junto com o método ActorController@edit que deverá retornar a visualização actor/form_edit.blade.php​, essa view (actor/form_edit.blade.php​) deverá conter um formulário com os dados do ator que deve ser editado, preenchidos por padrão no input. Levar em conta que o formulário deverá apontar para o caminho /actor/edit/{id} ​que será criado no próximo item.</li>
                                        <br/>
                                        <li><a class="" href="#" target="_self" title="Exercício 2b" rel="nofollow" alt="Exercício 2b">Exercício 2b</a></li>
                                        <br/>
                                        <br/>
                                        <li>c. Criar o caminho /actor/edit/{id}​, junto com o método ActorController@udpate​. Este método deverá atualizar os dados do ator modificado e redirecionar a /actors​.</li>
                                        <br/>
                                        <li><a class="" href="#" target="_self" title="Exercício 2c" rel="nofollow" alt="Exercício 2c">Exercício 2c</a></li>
                                        <br/>
                                        <br/>
                                        <li>d. Criar o caminho DELETE /actor/delete/{id}​, junto com o método ActorController@destroy​. Este método deverá eliminar o usuário correspondente. Em seguida, deverá redirecionar ao caminho /actors​.</li>
                                        <br/>
                                        <li><a class="" href="#" target="_self" title="Exercício 2d" rel="nofollow" alt="Exercício 2d">Exercício 2d</a></li>
                                        <br/>
                                        <br/>
                                        <li>e. Criar um novo formulário com um botão “Eliminar” na visualização actor.blade.php​ (levar em conta que o formulário deverá apontar para o caminho /actor/{id}​). Utilizar a função method_field​ para que o formulário seja enviado com o método DELETE.</li>
                                        <br/>
                                        <li><a class="" href="#" target="_self" title="Exercício 2e" rel="nofollow" alt="Exercício 2e">Exercício 2e</a></li>
                                        <br/>
                                        <br/>
                                    </ul>
                                </li>
                            </ul>
                            <!-- EXERCÍCIO 2 - FIM -->

                            <!-- FUNCIONALIDADES - INÍCIO -->
                            <ul class="lista">
                                <li>Funcionalidades</li>
                                <br/>
                                <li>
                                    <ul class="lista">
                                        <li>Filmes</li>
                                        <br/>
                                        <li><a href="{{url('/filmes#37-3d-g')}}" target="_blank" title="Ver Lista de Filmes" rel="next" alt="Ver Lista de Filmes">Ver Lista de Filmes</a></li>
                                        <li><a href="{{url('/filmes/#buscaTituloFilme')}}" target="_blank" title="Buscar Filme por Título" rel="next" alt="Buscar Filme por Título">Buscar Filme por Título</a></li>
                                        <li><a href="{{url('/form#38-1')}}" target="_blank" title="Adicionar Novo Filme" rel="next" alt="Adicionar Novo Filme">Adicionar Novo Filme</a></li>
                                        <li><a href="{{url('/atores#37-3a-b-c-h')}}" target="_blank" title="Ver Lista de Atores" rel="next" alt="Ver Lista de Atores">Ver Lista de Atores</a></li>
                                        <!-- <li><a href="{{url('/atores#37-4a-b-c-d')}}" target="_blank" title="Buscar Ator por Nome" rel="next" alt="Buscar Ator por Nome">Buscar Ator Por Nome (formulário)</a></li>
                                        <li><a href="localhost:8000/ator/INSIRA-AQUI-O-ID-DO-ATOR-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Buscar Ator por Id" rel="next" alt="Buscar Ator por Id">Buscar Ator por Id (com detalhes)</a></li>
                                        <li><a href="localhost:8000/filmes/procurarId/INSIRA-AQUI-O-ID-DO-FILME-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Buscar Filme por Id" rel="next" alt="Buscar Filme por Id">Buscar Filme por Id (com detalhes)</a></li> -->
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
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula38/app" target="_blank" title="Acessar Models" rel="external" alt="Acessar Models"><i class="fas fa-database"></i></a></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/tree/master/aula38/resources/views" target="_blank" title="Acessar Views" rel="external" alt="Clique para acessar as Views"><i class="fas fa-eye"></i></a></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula38/app/Http/Controllers" target="_blank" title="Acessar Controllers" rel="external" alt="Clique para acessar os Controllers"><i class="fas fa-cog"></i></a></li>
                            <li><h3>+</h3></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/aula38/routes" target="_blank" title="Acessar Routes" rel="external" alt="Clique para acessar as Routes"><i class="fas fa-project-diagram"></i></a></li>
                            <li><h3>+</h3></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/blob/master/README.md" target="_blank" title="Acessar README.md" rel="help" alt="Clique para acessar o arquivo README.md"><i class="fas fa-info"></i></a></li>
                            <li><h3>+</h3></li>
                            <li><a href="https://github.com/Marcelo-Diament/dh-entregaveis/tree/master/aula38" target="_blank" title="Acessar o repositório" rel="external" alt="Clique para acessar o repositório"><i class="fab fa-github"></i></a></li>
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
        <div id="logos">
            <a id="cube" href="djament.com.br" title="Djament Comunicação" alt="Djament Comunicação" rel="external" target="_blank">
                <img src="https://djament.com.br/assets/img/logo-60x60.png" height="60px" width="60px"  id="front" alt="Djament">
                <img src="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png" height="60px" width="60px" id="back" alt="Digital House">
            </a>
        </div>
        <div id="logos">
            <a id="cube" href="djament.com.br" title="Djament Comunicação" alt="Djament Comunicação" rel="external" target="_blank">
                <img src="https://djament.com.br/assets/img/logo-60x60.png" height="60px" width="60px"  id="front" alt="Djament">
                <img src="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png" height="60px" width="60px" id="back" alt="Digital House">
            </a>
        </div>
    </body>
</html>
