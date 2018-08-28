<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 3.7.</b></h2>
                <p>Por último, executar o código <code>pessoa.comer("macarrão")</code>.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
pessoa.comer('macarrão')<span class="terminal">_</span>
                </pre>
                <small>Resultado ocorreu corretamente (printou "<i>Estou comendo macarrão!</i> ").</small>
            </article>
        </section>
        <form class="botoes">
            <button type="submit" formaction="exercicio-3-6.php" target="_self"><i class="fas fa-arrow-left"></i> Exercício Anterior</button>
            <button type="submit" formaction="index.php" disabled target="_self" class="disabled">Não há mais Exercícios <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
<?php include_once('footer.php'); ?>