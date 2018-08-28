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
        <form class="botoes">
            <button type="submit" formaction="exercicio-2-1.php" target="_self"><i class="fas fa-arrow-left"></i> Exercício Anterior</button>
            <button type="submit" formaction="exercicio-2-3.php" target="_self">Próximo Exercício <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
<?php include_once('footer.php'); ?>