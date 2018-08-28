<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 3.2.</b></h2>
                <p>Utilizando console.log, imprimir na linha de comando todas as propriedades de pessoa.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
console.log('Nome completo: '+pessoa.nome+' '+pessoa.sobrenome)
console.log('Idade: '+pessoa.idade)
console.log('Gênero: '+pessoa.sexo)
console.log('Estado Civil: '+pessoa.estadoCivil)
console.log('Filmes Prediletos: '+pessoa.filmesPreferidos)<span class="terminal">_</span>
                </pre>
                <small>Resultado ocorreu corretamente (printou todos os dados, separando as strings do array com vírgulas).</small>
            </article>
        </section>
        <form class="botoes">
            <button type="submit" formaction="exercicio-3-1.php" target="_self"><i class="fas fa-arrow-left"></i> Exercício Anterior</button>
            <button type="submit" formaction="exercicio-3-3.php" target="_self">Próximo Exercício <i class="fas fa-arrow-right"></i></button>
        </form>
    </main>
<?php include_once('footer.php'); ?>