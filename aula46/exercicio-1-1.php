<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1.1.</b></h2>
                <p>Definir uma função chamada elevarAoSegundo​ que receba dois números e retorne o primeiro número elevado à potência do segundo. Por exemplo: minhaFuncao(5,2) = 5² = 25.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
function elevarAoSegundo(a,b){
    let resultado = a**b
    console.log('Exercício 1.1.', resultado)
}<span class="terminal">_</span>
                </pre>
                <small>Resultado, sendo a = 5 e b = 2, deu 25 (correto).</small>
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