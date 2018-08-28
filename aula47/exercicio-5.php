<?php include_once('head.php'); ?>
    <script src="script.js"></script>
    <title>Aula 47 | Exerício 5</title>
</head>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 5</b></h2>
                <p>Criar outro documento html que importe o arquivo script.js para fazer o seguinte:</p>
                <br/>
                    <ol>
                        <li>Pedir 2 números ao usuário</li>
                        <li>Quando terminar, perguntar ao usuário se ele tem certeza dos números inseridos. Caso contrário, voltar ao ponto anterior.</li>
                        <li>Usar alert()​ para informar o maior número ao usuário.</li>
                    </ol>
                <br/>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
let numero1 = prompt('Por favor, insira um número qualquer')
let numero2 = prompt('Agora insira mais um número, por obséquio')
let confirmar = confirm('Então os números serão '+numero1+' '+numero2+', confirma?')

if (confirmar == true){
    if (parseInt(numero1) > parseInt(numero2)){
        alert('O número '+numero1+' é o maior número.')
    } else if (parseInt(numero2) > parseInt(numero1)){
        alert('O número '+numero2+' é o maior número.')
    } else {
        alert('Você inseriu dois números iguais.')
    }
}<span class="terminal">_</span>
                </pre>
                <small>Resultado ocorreu corretamente (mostrando o maior número).
                <br/>
                Poderíamos usar o if ternário (inclusive com o else if*, mas ficaria poluído e perderia o sentido).
                <br/>
                * O else if dentro do ternário funciona como o Excel, um novo if dentro do <i>case false</i>.
                </small>
            </article>
        </section>
        <form class="botoes">
            <button type="submit" formaction="exercicio-4.php" target="_self"><i class="fas fa-arrow-left"></i> Exercício Anterior</button>
            <button type="submit" formaction="index.php" target="_self" disabled class="disabled">Não há mais exercícios</button>
        </form>
    </main>
<?php include_once('footer.php'); ?>