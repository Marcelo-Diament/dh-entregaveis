<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 2.2.</b></h2>
                <p>Utilizando o array do exercício 2.1., implementar a função map para obter um arrayResultado com a raiz quadrada de cada um dos números. Para isso, utilizar a função <code>Math.sqrt</code>.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <small>Com ForEach</small>
                <pre>
let raizesQuadradas = listaNumeros.forEach(function(value){
    console.log(Math.sqrt(value))
})<span class="terminal">_</span>
                </pre>
                <small>Com Map</small>
                <pre>
let raizesQuadradasMap = listaNumeros.map(function(value){
    console.log(Math.sqrt(value))
})<span class="terminal">_</span>
                </pre>
                <small>Resultado ocorreu corretamente (printou "1, 1.41, 1.73, 2 e assim por diante").</small>
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