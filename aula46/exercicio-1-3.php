<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1.3.</b></h2>
                <p>Considerando o seguinte código:
                    <br/>
                    <code>function atribuicao() {var numero = 5;}console.log(numero);</code>
                    <br/>
                    O código funcionou? Por que não?
                    <br/>
                </p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <p>Retorna <i>undefined</i>. Para que ocorra corretamente deveria ser:</p>
                <pre>
let atribuicao = function(numero){
    return numero
}
let numero = 5
console.log('Exercício 1.3.', atribuicao(numero))<span class="terminal">_</span>
                </pre>
                <small>Resultado, sendo numero = 5, deu 5 (correto).</small>
            </article>
        </section>
        <form class="botoes">
            <button type="submit" formaction="exercicio-1-2.php" target="_self"><i class="fas fa-arrow-left"></i> Exercício Anterior</button>
            <button type="submit" formaction="exercicio-1-4.php" target="_self">Próximo Exercício <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
<?php include_once('footer.php'); ?>