<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 2.1.</b></h2>
                <p>Definir um array de números de 1 a 20. Utilizando o método forEach, imprimir na linha de comando apenas os que sejam múltiplos de 7.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
let listaNumeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

let porSete = listaNumeros.filter(function(numero) {
    return (numero%7 == 0)
})

let multiplosDeSete = porSete.forEach(function(value){
    console.log(value+' é múltiplo de 7')
})<span class="terminal">_</span>
                </pre>
                <small>Resultado ocorreu corretamente (printou "7 é múltiplo de 7" e "14 é múltiplo de 7").</small>
            </article>
        </section>
        <form class="botoes">
            <button type="submit" formaction="exercicio-1-5.php" target="_self"><i class="fas fa-arrow-left"></i> Exercício Anterior</button>
            <button type="submit" formaction="exercicio-2-2.php" target="_self">Próximo Exercício <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
<?php include_once('footer.php'); ?>