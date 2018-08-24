<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 3.6.</b></h2>
                <p>Adicionar à pessoa um método chamado <code>comer()</code>, que receba um parâmetro comida e que imprima na linha de comando: “estou comendo:” e, em seguida, o nome da comida.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
pessoa.comer = function(comida){
    console.log('Estou comendo '+comida+'!')
}<span class="terminal">_</span>
                </pre>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>