<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>Exercício 2.3.</b></h2>
                <p>Um detetive recebeu um código anônimo e quer decifrar a mensagem. Para isso, ele pede ajuda a você. As únicas pistas que ele recebeu foram: filter e typeof. Será que você consegue ajudá-lo?</p>
                <code>
                    var enigma = ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,"r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];
                </code>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Resultado</b></h2>
                <pre>
var enigma = ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,"r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];

let valoresAlfa = enigma.filter(function(value){
    return (typeof value !== 'number')
})<span class="terminal">_</span>
                </pre>
                <small>Resultado ocorreu corretamente (printou "la perseverancia es la clave").</small>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>