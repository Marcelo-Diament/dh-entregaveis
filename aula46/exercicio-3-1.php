<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 3.1.</b></h2>
                <p>Criar um objeto chamado pessoa que tenha as seguintes propriedades com valores predefinidos.</p>
                    <ol type="a">
                        <li>idade (number)</li>
                        <li>nome (string)</li>
                        <li>sobrenome (string)</li>
                        <li>sexo (string)</li>
                        <li>estado civil (string)</li>
                        <li>filmes preferidos (array de strings)</li>
                    </ol>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
let pessoa = {
    idade: 31,
    nome: 'Kawara',
    sobrenome: 'Nofuro',
    sexo: 'Masculino',
    estadoCivil: 'Solteiro',
    filmesPreferidos: [' Snatch - Porcos e Diamantes', ' Jogos, Trapaças e Dois Canos Fumegantes', ' Catch Me If You Can']
}<span class="terminal">_</span>
                </pre>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>