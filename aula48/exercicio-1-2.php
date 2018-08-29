<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1.2.</b></h2>
                <p>Utilizando <code>querySelector(“”)</code> fazer com que, depois do carregamento da página, a coruja fique preta e branca. Para isso, utilizar:</p>
                <br/>
                <code>
                    elemento.style.filter = "grayscale(100%)";
                </code>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
const coruja = document.querySelector('#lechuza')
coruja.style.filter = 'grayscale(100%)'<span class="terminal">_</span>
                </pre>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>