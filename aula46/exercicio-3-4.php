<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 3.4.</b></h2>
                <p>Adicionar a pessoa um método chamado cumprimento(), que imprima na linha de comando o <code>< Olá ​nome​ e o ​sobrenome >​</code> da pessoa.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
pessoa.cumprimento = function(){
    console.log('Olá '+pessoa.nome+' '+pessoa.sobrenome+'!')
}<span class="terminal">_</span>
                </pre>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>