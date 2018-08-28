<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 2.4.</b></h2>
                <p>Com todas essas informações, o detetive conseguiu descobrir o nome de uma rua, mas não a número. A única coisa que ele encontrou para decifrar foi esta legenda: “Somar todos os números do enigma proposto para encontrar o número”. Ele também encontrou uma pista que dizia reduce​.</p>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
let valoresNum = enigma.filter(function(value){
    return (typeof value === 'number')
})

let NumEnigma = valoresNum.reduce(function(soma, numero){
    return soma + numero
})<span class="terminal">_</span>
                </pre>
                <small>Resultado ocorreu corretamente (printou 215).</small>
                <br/>
                <br/>
                <p>O enigma foi desvendado! O endereço é Calle Perseverancia, 215 - La Habana, Cuba. Confira!</p>
                <div class="enigma row">
                    <iframe class="col-12 col-md-6" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.8394737783756!2d-82.36777729933755!3d23.139542127753394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88cd79b7ddf218dd%3A0xffdc68e494a2f0b5!2s215+Perseverancia%2C+La+Habana%2C+Cuba!5e0!3m2!1spt-BR!2sbr!4v1535133152778" width="48%" height="337" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <img class="col-12 col-md-6" src="img/perseverancia-215-habana-cuba.jpg" alt="La Perseverancia, 215 - La Habana, Cuba" title="La Perseverancia, 215 - La Habana, Cuba" height="337px" width="100%">
                </div>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>