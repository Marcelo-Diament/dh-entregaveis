<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1.2.</b></h2>
                <p>Criar uma variável chamada quadrado com uma função anônima atribuída que receba um número e retorne o quadrado desse número.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
let quadrado = function(a){
    return a**2
}
console.log('Exercício 1.2.', quadrado(3,2))<span class="terminal">_</span>
                </pre>
                <small>Resultado, sendo a = 3, deu 9 (correto).</small>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>