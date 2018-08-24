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
    </main>

    <footer>

    </footer>
    <div id="logos">
        <a id="cube" href="https://djament.com.br" title="Djament Comunicação" alt="Djament Comunicação" rel="external" target="_blank">
            <img src="https://djament.com.br/assets/img/logo-60x60.png" height="auto" width="auto"  id="front" alt="Djament" title="Djament">
            <img src="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png" height="auto" width="auto" id="back" alt="Digital House" title="Digital House">
        </a>
    </div>
</body>
</html>