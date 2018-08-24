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

    <footer>

    </footer>
    <div id="logos">
        <a id="cube" href="https://djament.com.br" title="Djament Comunicação" alt="Djament Comunicação" rel="external" target="_blank">
            <img src="https://djament.com.br/assets/img/logo-60x60.png" height="60px" width="60px"  id="front" alt="Djament" title="Djament">
            <img src="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png" height="60px" width="60px" id="back" alt="Digital House" title="Digital House">
        </a>
    </div>
</body>
</html>