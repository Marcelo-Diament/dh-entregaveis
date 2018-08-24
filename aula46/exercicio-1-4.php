<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 1.4.</b></h2>
                <p>Definir uma função chamada trianguloRetangulo que receba dois números com o valor de seus lados (a e b) e retorne a soma total das medidas (a+b+hipotenusa). Recordar a seguinte fórmula:</p>
                <br/>
                <img src="img/hipotenusa.png" alt="Fórmula de Pitágoras - Hipotenusa do triângulo" title="Fórmula de Pitágoras - Hipotenusa do triângulo" height="auto" width="auto"/>
                <br/>
                <p>Definir a função hipotenusa dentro de trianguloRetangulo e utilizá-la para resolver o exercício.</p>
                <small>Dica use <code>Math.srqt()</code> ​para calcular a raiz quadrada de um número.</small>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
function trianguloRetangulo(a,b){
    function hipotenusa(a,b){
        let hipotenusa = Math.sqrt(a**2 + b**2)
        return hipotenusa
    }
    let perimetroTriangulo = a + b + hipotenusa(a,b)
    console.log('Exercício 1.4.', perimetroTriangulo)
}<span class="terminal">_</span>
                </pre>
                <small>Resultado, sendo a = 3 e b = 4, deu 12 (correto).</small>
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