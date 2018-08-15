<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
                font-size: 84px;
                margin: 50px;
            }
            .title img{
                display: block;
                margin: auto;
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
                margin-bottom: 50px;
            }
            .enunciado{
                background-color: #f2f2f2;
                text-align: left;
                width: 100%;
                padding: 20px;
                display: inline-block;
                border-radius: 20px 20px 0px 0px;
                border-bottom: 3px solid #fa503a;
            }
            .enunciado p{
                font-weight: bold;
            }
            .fa-code{
                color: #fa503a;
                display: inline-block;
            }
            .resultado{
                background-color: #cecece;
                text-align: left;
                width: 100%;
                padding: 20px;
                display: inline-block;
                border-radius: 0px 0px 20px 20px;
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
                    <img src="https://midnightcorp.com/wp-content/themes/midnightwp/dist/images/laravel.png" alt="Laravel" width="128" height="auto">
                    Aula 36 | Laravel II
                </div>
                
                <!-- EXERCÍCIO 01 A e B - INÍCIO-->
                <div class="bloco-exercicio">
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
                        <h3>Insira "procurarId/{id}" na URL para buscar um filme por seu id.</h3>
                    @endif
                    </div>
                </div>
                <!-- EXERCÍCIO 01 A e B - FIM -->

                <!-- EXERCÍCIO 01 C - INÍCIO -->
                <div class="bloco-exercicio">
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
                        <h3>Insira "procurarTitulo/{titulo}" na URL para buscar um filme por seu nome.</h3>
                    @endif
                    </div>
                </div>
                <!-- EXERCÍCIO 01 C - FIM -->
                
                <!-- EXERCÍCIO 02 A, B, C e D - INÍCIO -->
                <div class="bloco-exercicio">
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
                            @foreach ($listaFilmes as $idFilme => $tituloFilme)
                                <li>{{ $idFilme }} | {{ $tituloFilme}} </li><br/>
                            @endforeach;
                        </ul>
                    </div>
                </div>
                <!-- EXERCÍCIO 02 A, B, C e D - FIM -->

            </div>
        </div>
    </body>
</html>
