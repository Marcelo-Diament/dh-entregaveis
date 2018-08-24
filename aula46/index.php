<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="script.js"></script>
    <link href="style.css" rel="stylesheet">
    <title>JavaScript - Aula 1 - Introdução</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="#">Aula 46</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Início<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
        </div>
    </nav>
    <header class="container">
        <div class="row">
            <div class="col-12">
                <img src="https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/082014/js1_0.png" alt="JavaScript" title="JavaScript" height="150" width="150"/>
                <h1 class="col-12">Aula 46 | JavaScript</h1>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>JavaScript I | Introdução</b></h2>
                <small>Professores Digital House: Thiago M. Medeiros, Thomas Staziak</small>
                <br/>
                <small>Aula realizada em 23 de Agosto de 2018</small>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><b>Exercício 1 Funções</b></h2>
                <ol type="1">
                    <li>Definir uma função chamada elevarAoSegundo​ que receba dois números e retorne o primeiro número elevado à potência do segundo. Por exemplo: minhaFuncao(5,2) = 5² = 25.
                        <br/>
                        <a href="exercicio-1-1.php" title="Acessar exercício 1.1." alt="Acessar exercício 1.1." rel="next" target="_blank"><b>Exercício 1.1.</b></a>
                        <br/>
                    </li>
                    <li>Criar uma variável chamada quadrado com uma função anônima atribuída que receba um número e retorne o quadrado desse número.
                        <br/>
                        <a href="exercicio-1-2.php" title="Acessar exercício 1.2." alt="Acessar exercício 1.2." rel="next" target="_blank"><b>Exercício 1.2.</b></a>
                        <br/>
                    </li>
                    <li>Considerando o seguinte código:
                        <br/>
                        <code>function atribuicao() {var numero = 5;}console.log(numero);</code>
                        <br/>
                        O código funcionou? Por que não?
                        <br/>
                        <br/>
                        <a href="exercicio-1-3.php" title="Acessar exercício 1.3." alt="Acessar exercício 1.3." rel="next" target="_blank"><b>Exercício 1.3.</b></a>
                        <br/>
                    </li>
                    <li>Definir uma função chamada trianguloRetangulo que receba dois números com o valor de seus lados (a e b) e retorne a soma total das medidas (a+b+hipotenusa). Recordar a seguinte fórmula:
                        <br/>
                        <img src="img/hipotenusa.png" alt="Fórmula de Pitágoras - Hipotenusa do triângulo" title="Fórmula de Pitágoras - Hipotenusa do triângulo" height="auto" width="auto"/>
                        <br/>
                        Definir a função hipotenusa dentro de trianguloRetangulo e utilizá-la para resolver o exercício.<br/>
                        <small>Dica use <code>Math.srqt()</code> ​para calcular a raiz quadrada de um número.</small>
                        <br/>
                        <a href="exercicio-1-4.php" title="Acessar exercício 1.4." alt="Acessar exercício 1.4." rel="next" target="_blank"><b>Exercício 1.4.</b></a>
                        <br/>
                    </li>
                    <li>Definir uma função meuSanduiche que receba três parâmetros: os primeiros dois são ingredientes e o terceiro é uma função callback. A função meuSanduiche deverá imprimir na linha de comando “estou comendo um sanduíche de:” com os ingredientes passados. Utilizar a função callback nessa função para imprimir na linha de comando: “terminei de comer meu sanduíche”. Por último, executar a função meuSanduiche e passar valores.
                    <br/>
                        <a href="exercicio-1-5.php" title="Acessar exercício 1.5." alt="Acessar exercício 1.5." rel="next" target="_blank"><b>Exercício 1.5.</b></a>
                        <br/>
                    </li>
                </ol>
                <br/>
                <hr>
                <br/>
                <h2 class="title"><b>Exercício 2 - Arrays</b></h2>
                <ol type="1">
                    <li>Definir um array de números de 1 a 20. Utilizando o método forEach, imprimir na linha de comando apenas os que sejam múltiplos de 7.</li>
                    <li>Utilizando o array do exercício 1, implementar a função map para obter um arrayResultado com a raiz quadrada de cada um dos números. Para isso, utilizar a função Math.sqrt.</li>
                    <li>Um detetive recebeu um código anônimo e quer decifrar a mensagem. Para isso, ele pede ajuda a você. As únicas pistas que ele recebeu foram: filter e typeof. Será que você consegue ajudá-lo?
                        <br/>
                        <code>var enigma = ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,"r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];</code>
                    </li>
                    <li>Com todas essas informações, o detetive conseguiu descobrir o nome de uma rua, mas não a número. A única coisa que ele encontrou para decifrar foi esta legenda: “Somar todos os números do enigma proposto para encontrar o número”. Ele também encontrou uma pista que dizia <b><i>reduce</i></b>​.</li>
                </ol>
                <br/>
                <hr>
                <br/>
                <h2 class="title"><b>Exercício 3 - Objeto Literal</b></h2>
                <ol type="1">
                    <li>Criar um objeto chamado pessoa que tenha as seguintes propriedades com valores predefinidos.
                        <ol type="a">
                            <li>idade (number)</li>
                            <li>nome (string)</li>
                            <li>sobrenome (string)</li>
                            <li>sexo (string)</li>
                            <li>estado civil (string)</li>
                            <li>filmes preferidos (array de strings)</li>
                        </ol>
                    </li>
                    <li>Utilizando console.log, imprimir na linha de comando todas as propriedades de pessoa.</li>
                    <li>Trocar a idade para simular que ela fez aniversário e utilize o console.log para ver o resultado.</li>
                    <li>Adicionar a pessoa um método chamado cumprimento(), que imprima na linha de comando o < Olá ​nome​ e o ​sobrenome >​ da pessoa.</li>
                    <li>Executar: <code>pessoa.cumprimento()</code>.</li>
                    <li>Adicionar a pessoa um método chamado comer(), que receba um parâmetro comida e que imprima na linha de comando: “estou comendo:” e, em seguida, o nome da comida.</li>
                    <li>Por último, executar o código pessoa.comer("macarrão").</li>
                </ol>
            </article>
        </section>
    </main>

    <footer>

    </footer>
    <div id="logos">
        <a id="cube" href="https://djament.com.br" title="Djament Comunicação" alt="Djament Comunicação" rel="external" target="_blank">
            <img src="https://djament.com.br/assets/img/logo-60x60.png" height="60px" width="60px"  id="front" alt="Djament" title="Djament">
            <img src="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png" height="60px" width="60px" id="back" alt="Digital House" title="Digital House">
        </a>
    </div>
</body>
</html>