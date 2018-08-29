<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1.1.</b></h2>
                <p>Utilizando <code>document.getElementById("")</code>, ocultar o elemento <code>< h1 id=<strike>'cabeçalho'</strike> 'titular' ></code> ao carregar a página.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
const titular = document.getElementById('titular')
titular.style.display = 'none'<span class="terminal">_</span>
                </pre>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>