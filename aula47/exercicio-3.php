<?php include_once('head.php'); ?>
    <title>Aula 47 | Exerício 3</title>
</head>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1.3.</b></h2>
                <p>Adicionar um confirm que pergunte se o usuário tem mais de 18 anos e, caso ele seja menor de idade, faça o redirecionamento para http://www.disney.com.br, utilizando location</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
let maior = confirm('Se você tem mais de 18 anos, clique em OK')
if (maior === true){
    window.location = 'http://www.disney.com.br'
} else {
    window.reload
}<span class="terminal">_</span>
                </pre>
                <small>Resultado: clicando em OK é direcionado para o site da Disney, caso contrário, abre a página do exercício. Seria bacana utilizar o window.open para não sair da aba atual.</small>
            </article>
        </section>
        <form class="botoes">
            <button type="submit" formaction="exercicio-2.php" target="_self"><i class="fas fa-arrow-left"></i> Exercício Anterior</button>
            <button type="submit" formaction="exercicio-4.php" target="_self">Próximo Exercício <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
    <script>
        let maior = confirm('Se você tem mais de 18 anos, clique em OK')
        if (maior === true){
            window.location = 'http://www.disney.com.br'
        } else {
            window.reload
        }
    </script>
<?php include_once('footer.php'); ?>