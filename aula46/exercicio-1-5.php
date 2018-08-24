<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1.5.</b></h2>
                <p>Definir uma função meuSanduiche que receba três parâmetros: os primeiros dois são ingredientes e o terceiro é uma função callback. A função meuSanduiche deverá imprimir na linha de comando “estou comendo um sanduíche de:” com os ingredientes passados. Utilizar a função callback nessa função para imprimir na linha de comando: “terminei de comer meu sanduíche”. Por último, executar a função meuSanduiche e passar valores.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
function meuSanduiche(a, b, callback){
    console.log('Estou comendo um sanduíche de '+a+' com '+b+'...')
    setTimeout(function(){
        callback()}, 1000)
}
                    
function callback(){
    console.log('Terminei de comer meu sanduíche.')
}<span class="terminal">_</span>
                </pre>
                <small>Resultado ocorreu corretamente (printou Estou comendo um sanduíche de 'a', 'b'; depois de alguns segundos, apareceu Terminei de comer meu sanduíche).</small>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>