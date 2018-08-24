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

    <footer>

    </footer>
    <div id="logos">
        <a id="cube" href="https://djament.com.br" title="Djament Comunicação" alt="Djament Comunicação" rel="external" target="_blank">
            <img src="https://djament.com.br/assets/img/logo-60x60.png" height="auto" width="auto"  id="front" alt="Djament" title="Djament">
            <img src="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png" height="auto" width="auto" id="back" alt="Digital House" title="Digital House">
        </a>
    </div>
</body>
</html>