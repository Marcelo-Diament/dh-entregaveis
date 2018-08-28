<?php include_once('head.php'); ?>
<title>Aula 47 | Exerício 4</title>
</head>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 4</b></h2>
                <p>Escrever um console.log que mostre o endereço URL da página atual.</p>
                <br/>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
console.log('A URL que você está é '+window.location.href)
alert('A URL que você está é '+window.location.href)<span class="terminal">_</span>
                </pre>
                <small>Resultado: exibe a URL correta (<i>A URL em que você está é .../exercicio-4.php</i> - de acordo com o host).
                <br/>
                Incluí um prompt para ser possível visualizar ao entrar (como uma confirmação).</small>
            </article>
        </section>
        <form class="botoes">
            <button type="submit" formaction="exercicio-3.php" target="_self"><i class="fas fa-arrow-left"></i> Exercício Anterior</button>
            <button type="submit" formaction="exercicio-5.php" target="_self">Próximo Exercício <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
    <script>
        console.log('A URL que você está é '+window.location.href)
        alert('A URL que você está é '+window.location.href)
    </script>
<?php include_once('footer.php'); ?>