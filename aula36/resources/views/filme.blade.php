<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aula 36 | Ex 1 e 2 (a-e)</title>

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
                
                <!-- EXERCÍCIO 01 A e B - INÍCIO-->
                <div class="bloco-exercicio" id="36-1a-b">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Exercício 01 A e B | Buscar Filme por Id</h2>
                        <p>a. Criar um novo controlador chamado FilmesController.</p>
                        <p>b. No arquivo routes/web.php, criar a rota <strike>/filmes/{id}</strike> /filmes/procurarId/{id}​. Dentro do controlador FilmesController, criar o método procurarFilmeId($id)​ e copiar o array de filmes definido no final do exercício. De acordo com o parâmetro recebido pela URL, retornar o nome do filme. Considerar que o <strike>número de ID é igual à posição do elemento no array</strike> o número do Id é o número passado no array do exercício.</p>
                    </div>
                    <div class="resultado">
                    @if (isset($resultado))
                        @if ($resultado != 'Não encontrado')
                            <h3>O filme de id <b>{{ $idFilme }}</b> é o <b>{{ $tituloFilme }}</b><h3>
                        @elseif ($idFilme == null)
                            <h3>Não há nenhum filme com o nome <b>{{ $tituloFilme }}</b>, confira a lista mais adiante.</h3>
                        @else
                            <h3>Não há nenhum filme com id <b>{{ $idFilme }}</b>, confira a lista mais adiante.</h3>
                        @endif
                    @else
                        <h3>Acesse a rota <a href="localhost:8000/filmes/procurarId/INSIRA-AQUI-O-TÍTULO-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Buscar filme por id" rel="next" alt="Buscar filme por id">/procurarId/{id}</a> para buscar um filme por seu id.</h3>
                    @endif
                    </div>
                </div>
                <!-- EXERCÍCIO 01 A e B - FIM -->

                <!-- EXERCÍCIO 01 C - INÍCIO -->
                <div class="bloco-exercicio" id="36-1c">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Exercício 01 C | Buscar Filme por Título</h2>
                        <p>c. Criar o caminho <strike>/filmes/procurar/{nome}​</strike> /filmes/procurarTitulo/{titulo}, o método <strike>procurarFilmeNome($nome)</strike> procurarFilmeTitulo($titulo)​, e copiar o array de filmes definido ao final do exercício. De acordo com o parâmetro recebido por URL, procurar coincidências com o array de filmes. Caso haja coincidências, retornar o nome do filme. Caso contrário, retornar a string “Não foram encontrados resultados”.</p>
                    </div>
                    <div class="resultado">
                    @if (isset($resultado))
                        @if ($resultado != 'Não encontrado' && $tituloFilme != null)
                            <h3>O filme <b>{{ $tituloFilme }}</b> foi encontrado, seu id é <b>{{ $idFilme }}</b><h3>
                        @elseif ($resultado == 'Não encontrado' && $tituloFilme != null)
                            <h3>Não há nenhum filme chamado <b>{{ $tituloFilme }}</b> em nossos registros. Por favor, confira a lista mais adiante.</h3>
                        @elseif ($tituloFilme == null)
                            <h3>Não há nenhum filme com o id buscado em nossos registros. Por favor, confira a lista mais adiante.</h3>
                        @endif
                    @else
                        <h3>Acesse a rota <a href="localhost:8000/filmes/procurarTitulo/INSIRA-AQUI-O-TÍTULO-QUE-PROCURA-E-DEPOIS-APERTE-ENTER" target="_blank" title="Buscar filme por título" rel="next" alt="Buscar filme por título">/procurarTitulo/{titulo}</a> para buscar um filme por seu nome.</h3>
                    @endif
                    </div>
                </div>
                <!-- EXERCÍCIO 01 C - FIM -->
                
                <!-- EXERCÍCIO 02 A, B, C e D - INÍCIO -->
                <div class="bloco-exercicio" id="36-2a-b-c-d">
                    <!-- <h2>Exercício 02 a</h2>
                    <ul class="lista">
                        <?php //foreach ($listaFilmes as $idFilme => $tituloFilme){
                            //echo '<li>'.{{ $idFilme }}.' | '.{{ $tituloFilme}}.' </li><br/>';
                        //} ?>
                    </ul> -->
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Exercício 02 A, B, C e D | Listar todos os Filmes</h2>
                        <p>a. Criar a view filme.blade.php​, com a rota /filmes​, e enviar o array de filmes definido ao final do exercício. Mostrar a lista de filmes na view, utilizando a sintaxe de PHP clássica.</p>
                        <p>b. Modificar a sintaxe da view anterior, implementando blade.</p>
                        <p>c. Modificar o caminho <strike>/filmes/{id}</strike> /filmes/procurarId/{id}​ para que utilize a visualização filmes.blade.php​.</p>
                        <p>d. Modificar a visualização filmes.blade.php​ para que mostre uma mensagem caso não haja resultados.</p>
                    </div>
                    <div class="resultado">
                        <ul class="lista">
                            <li><b>Id | Título do Filme</b></li>
                            <br/>
                            @foreach ($listaFilmes as $idFilme => $tituloFilme)
                                <li>{{ $idFilme }} | {{ $tituloFilme}} </li><br/>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- EXERCÍCIO 02 A, B, C e D - FIM -->

                <!-- EXERCÍCIO 02 E - INÍCIO -->
                <div class="bloco-exercicio" id="36-2e">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Exercício 02 E | Adicionar Novo Filme</h2>
                        <p>e. Criar um caminho /adicionarFilme/<strike>{filme}</strike>{novoTitulo}​ que adicione um filme ao array do último exercício utilizando o controlador FilmesController, ​este método deve retornar a string: “Filme adicionado com sucesso”.</p>
                    </div>
                    <div class="resultado">
                        @if (isset($novoTitulo))
                            <h3>Filme {{ $novoTitulo }} adicionado com sucesso!</h3>
                        @else
                            <h3>Acesse a rota <a href="localhost:8000/adicionarFilme/INSIRA-AQUI-O-TÍTULO-DO-NOVO-FILME-E-DEPOIS-APERTE-ENTER" target="_blank" title="Incluir novo filme" rel="next" alt="Incluir novo filme">/adicionarFilme/</a>, inclua o nome do filme após a última barra e confirme para acrescentar um filme à lista de filmes</h3>
                        @endif
                        <small>Como o exercício não envolve banco, após a inserção é exibida uma confirmação na view e a lista dos filmes é atualizada (na view).<br/>No entanto, o filme não é adicionado de fato ao array, então ao atualizar a página ele some novamente.</small>
                    </div>
                </div>
                <!-- EXERCÍCIO 02 E - FIM -->

                <!-- EXERCÍCIO 02 F - INÍCIO -->
                <div class="bloco-exercicio" id="36-2f">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Exercício 02 F | Listar todos os Filmes em nova View</h2>
                        <p>f. Criar uma rota /listarFilmes ​ que envie os dados ao controlador através do método <strike>listarFilmes​</strike> listarTodosOsFilmes. Também será necessário criar uma nova view todosOsFilmes.blade.php​ para mostrar todos os filmes.</p>
                    </div>
                    <div class="resultado">
                        <h3><a href="http://localhost:8000/todosOsFilmes" target="_blank" title="Acessar Exercício 2 f" rel="next" alt="Acessar Exercício 2 f">Clique aqui para acessar a nova view <i class="fas fa-external-link"></i></a></h3>
                        <small>Se preferir, acesse localhost:8000/todosOsFilmes.</small>
                    </div>
                </div>
                <!-- EXERCÍCIO 02 F - FIM -->

            </div>
        </div>
    </body>
</html>
