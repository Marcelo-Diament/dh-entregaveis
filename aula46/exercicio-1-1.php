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
        <form class="botoes">
            <button type="submit" formaction="index.php" target="_self"><i class="fas fa-arrow-left"></i> Início</button>
            <button type="submit" formaction="exercicio-1-2.php" target="_self">Próximo Exercício <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
<?php include_once('footer.php'); ?>