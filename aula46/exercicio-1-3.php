<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1.3.</b></h2>
                <p>Considerando o seguinte código:
                    <br/>
                    <code>function atribuicao() {var numero = 5;}console.log(numero);</code>
                    <br/>
                    O código funcionou? Por que não?
                    <br/>
                </p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <p>Retorna <i>undefined</i>. Para que ocorra corretamente deveria ser:</p>
                <pre>
let atribuicao = function(numero){
    return numero
}
let numero = 5
console.log('Exercício 1.3.', atribuicao(numero))<span class="terminal">_</span>
                </pre>
                <small>Resultado, sendo numero = 5, deu 5 (correto).</small>
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