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
                <div class="bloco-exercicio">
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Exercício 01 a e 01 b | Buscar Filme por Id</h2>
                        <p>a. Criar um novo controlador chamado FilmesController</p>
                        <p>b. No arquivo routes/web.php, criar a rota /filmes/{id}​. Dentro do controlador FilmesController, criar o método procurarFilmeId($id)​ e copiar o array de filmes definido no final do exercício. De acordo com o parâmetro recebido pela URL, retornar o nome do filme. Considerar que o número de ID é igual à posição do elemento no array.</p>
                    </div>
                    <div class="resultado">
                    @if (isset($resultado))
                        @if ($resultado != 'Não encontrado')
                            <h3>O filme de id <b>{{ $id }}</b> é o <b>{{ $tituloFilme }}</b><h3>
                        @else
                            <h3>Não há nenhum filme com id <b>{{ $id }}</b>, confira a lista mais adiante.</h3>
                        @endif
                    @else
                        <h3>Insira "procurarId/{id}" na URL para buscar um filme por seu id.</h3>
                    @endif
                    </div>
                </div>
                <div class="bloco-exercicio">
                    <!-- <h2>Exercício 02 a</h2>
                    <ul class="lista">
                        <?php //foreach ($listaFilmes as $idFilme => $tituloFilme){
                            //echo '<li>'.{{ $idFilme }}.' | '.{{ $tituloFilme}}.' </li><br/>';
                        //} ?>
                    </ul> -->
                    <div class="enunciado">
                        <h2><i class="fas fa-code"></i> Exercício 02 b | Listar todos os Filmes</h2>
                        <p>a. Criar um novo controlador chamado FilmesController</p>
                        <p>b. No arquivo routes/web.php, criar a rota /filmes/{id}​. Dentro do controlador FilmesController, criar o método procurarFilmeId($id)​ e copiar o array de filmes definido no final do exercício. De acordo com o parâmetro recebido pela URL, retornar o nome do filme. Considerar que o número de ID é igual à posição do elemento no array.</p>
                    </div>
                    <div class="resultado">
                        <ul class="lista">
                            @foreach ($listaFilmes as $idFilme => $tituloFilme)
                                <li>{{ $idFilme }} | {{ $tituloFilme}} </li><br/>
                            @endforeach;
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
