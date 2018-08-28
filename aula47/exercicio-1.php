<?php include_once('head.php'); ?>
    <title>Aula 47 | Exerício 1</title>
</head>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1</b></h2>
                <p>Criar um documento html e adicionar a tag <code>< script ></code> contendo um alert no momento em que a página terminar de carregar. Lembre-se de utilizar:</p>
                <br/>
                <code>
                    window.onload = function() {
                        //isso é executado quando a página é carregada
                    };
                </code>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
window.onload = function() {
    alert('Página Carregada!')
};<span class="terminal">_</span>
                </pre>
                <small>Resultado: alert com frase <i>'Página Carregada!'</i>.</small>
            </article>
        </section>
        <form class="botoes">
            <button type="submit" formaction="index.php" target="_self"><i class="fas fa-arrow-left"></i> Início</button>
            <button type="submit" formaction="exercicio-2.php" target="_self">Próximo Exercício <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
    <script>
        window.onload = function() {
            alert("Página Carregada!")
        };
    </script>
<?php include_once('footer.php'); ?>