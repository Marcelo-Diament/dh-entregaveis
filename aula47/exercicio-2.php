<?php include_once('head.php'); ?>
    <title>Aula 47 | Exerício 2</title>
</head>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 2</b></h2>
                <p>Adicionar um prompt que pergunte o nome do usuário e, em seguida, execute um alert que diga “Bem-vindo, XX”, em que XX é o nome inserido.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
let nome = prompt('Qual o seu nome?')
alert('Seja bem vindo(a) '+nome)<span class="terminal">_</span>
                </pre>
                <small>Resultado: alert com a mensagem <i>'Seja bem vindo(a) NOME INSERIDO'</i>.</small>
            </article>
        </section>
        <form class="botoes">
            <button type="submit" formaction="exercicio-1.php" target="_self"><i class="fas fa-arrow-left"></i> Exercício Anterior</button>
            <button type="submit" formaction="exercicio-3.php" target="_self">Próximo Exercício <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
    <script>
        let nome = prompt('Qual o seu nome?')
        alert('Seja bem vindo(a) '+nome)
    </script>
<?php include_once('footer.php'); ?>