<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1.3.</b></h2>
                <p>Utilizando querySelectorAll(“”) selecionar todos os inputs do formulário e alterar a cor de fundo de cada um (percorrê-los com forEach), usando:</p>
                <br/>
                <code>elemento.style.background = "red";</code>
                <br/>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
const inputsForms = document.querySelectorAll('input')
inputsForms.forEach(function(input){input.style.background = 'red'})

const textAreaForms = document.querySelectorAll('textarea')
textAreaForms.forEach(function(textarea){textarea.style.background = 'red'})<span class="terminal">_</span>
                </pre>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>