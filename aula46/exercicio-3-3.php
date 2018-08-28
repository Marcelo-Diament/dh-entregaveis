<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 3.3.</b></h2>
                <p>Trocar a idade para simular que ela fez aniversário e utilize o console.log para ver o resultado.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
pessoa.idade = 32
console.log('Idade atualizada: '+pessoa.idade)<span class="terminal">_</span>
                </pre>
                <small>Resultado ocorreu corretamente (printou todos os dados, com a nova idade definida).</small>
            </article>
        </section>
        <form class="botoes">
            <button type="submit" formaction="exercicio-3-2.php" target="_self"><i class="fas fa-arrow-left"></i> Exercício Anterior</button>
            <button type="submit" formaction="exercicio-3-4.php" target="_self">Próximo Exercício <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
<?php include_once('footer.php'); ?>