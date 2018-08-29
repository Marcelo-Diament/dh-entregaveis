<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>JavaScript III | DOM, Seletores e Elementos</b></h2>
                <small>Professores Digital House: Thiago M. Medeiros, Thomas Staziak</small>
                <br/>
                <small>Aula realizada em 28 de Agosto de 2018</small>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Exercício 1 | Seletores</b></h2>
                <br/>
                <small>Esclarecimento​: Para esta prática, vamos utilizar uma página de HTML5UP carregada no campus. Vamos trabalhar com o arquivo index.html e o <strike>arquivo main.js que está na pasta assets/js/</strike> script.js (../script.js). Lembre-se de utilizar window.onload para executar o código desses exercícios.</small>
                <ol type="1">
                    <li>Utilizando <code>document.getElementById("")</code>, ocultar o elemento <code>< h1 id=<strike>'cabeçalho'</strike> 'titular' ></code> ao carregar a página.
                        <br/>
                        <a href="exercicio-1-1.php" title="Acessar exercício 1.1." alt="Acessar exercício 1.1." rel="next" target="_blank"><b>Exercício 1.1. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Utilizando <code>querySelector(“”)</code> fazer com que, depois do carregamento da página, a coruja fique preta e branca. Para isso, utilizar:
                        <br/>
                        <code>
                            elemento.style.filter = "grayscale(100%)";
                        </code>
                        <br/>
                        <a href="exercicio-1-2.php" title="Acessar exercício 1.2." alt="Acessar exercício 1.2." rel="next" target="_blank"><b>Exercício 1.2. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Utilizando querySelectorAll(“”) selecionar todos os inputs do formulário e alterar a cor de fundo de cada um (percorrê-los com forEach), usando:
                        <br/>
                        <code>elemento.style.background = "red";</code>
                        <br/>
                        <a href="exercicio-1-3.php" title="Acessar exercício 1.3." alt="Acessar exercício 1.3." rel="next" target="_blank"><b>Exercício 1.3. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                </ol>
                <br/>
                <hr>
                <br/>
                <h2 class="title"><i class="fas fa-code"></i> <b>Exercício 2 | DOM - Seletores e Elementos</b></h2>
                <br/>
                <ol type="1">
                    <li>Selecionar o elemento com id “copyright” e mostrar todos os atributos dele na linha de comando, utilizando elemento.attributes.
                        <br/>
                        <a href="exercicio-2-1.php" title="Acessar exercício 2.1." alt="Acessar exercício 2.1." rel="next" target="_blank"><b>Exercício 2.1. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Usando getAttribute, mostrar na linha de comando a url à qual o botão do Twitter redireciona.
                        <br/>
                        <a href="exercicio-2-2.php" title="Acessar exercício 2.2." alt="Acessar exercício 2.2." rel="next" target="_blank"><b>Exercício 2.2. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Usando getAttribute, mostrar na linha de comando a url à qual o botão do Facebook redireciona.
                        <br/>
                        <a href="exercicio-2-3.php" title="Acessar exercício 2.3." alt="Acessar exercício 2.3." rel="next" target="_blank"><b>Exercício 2.3. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Repare que o ícone do YouTube direciona ao Google. Queremos mudar isso com JavaScript, usando setAttribute, para que o ícone direcione ao canal da Digital House no YouTube.
                        <br/>
                        <a href="exercicio-2-4.php" title="Acessar exercício 2.4." alt="Acessar exercício 2.4." rel="next" target="_blank"><b>Exercício 2.4. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Repare que o form não está funcionando e nos perguntaram se, por JavaScript, podemos ver se há um atributo action atribuído e imprimir o resultado em linha de comando.
                        <br/>
                        <a href="exercicio-2-5.php" title="Acessar exercício 2.5." alt="Acessar exercício 2.5." rel="next" target="_blank"><b>Exercício 2.5. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Repare que o programador se confundiu e adicionou no action um atributo url errado. Agora, precisamos excluir e adicionar a url a action, tudo por JavaScript.
                        <br/>
                        <a href="exercicio-2-6.php" title="Acessar exercício 2.6." alt="Acessar exercício 2.6." rel="next" target="_blank"><b>Exercício 2.6. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Utilizando elemento.style, trocar a cor de h2 para vermelho.
                        <br/>
                        <a href="exercicio-2-7.php" title="Acessar exercício 2.7." alt="Acessar exercício 2.7." rel="next" target="_blank"><b>Exercício 2.7. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Precisamos mudar a cor de todos os ícones da página. Lembre que eles são da classe “icon”.
                        <br/>
                        <a href="exercicio-2-8.php" title="Acessar exercício 2.8." alt="Acessar exercício 2.8." rel="next" target="_blank"><b>Exercício 2.8. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                </ol>
                <br/>
                <hr>
                <br/>
                <h2 class="title"><i class="fas fa-code"></i> <b>Exercício 3 | Eventos</b></h2>
                <br/>
                <ol type="1">
                    <li>Precisamos criar um botão usando JavaScript. A ideia é que ele fique ao lado do botão de abracadabra. Quando clicar no botão criado deve fazer a imagem da coruja desaparecer.
                        <br/>
                        <a href="exercicio-3-1.php" title="Acessar exercício 3.1." alt="Acessar exercício 3.1." rel="next" target="_blank"><b>Exercício 3.1. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Traduzir todos os textos da top nav para português. Para isso, podemos usar os ids deles com o textContent.
                        <br/>
                        <a href="exercicio-3-2.php" title="Acessar exercício 3.2." alt="Acessar exercício 3.2." rel="next" target="_blank"><b>Exercício 3.2. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Utilizando removeChild, remover o ícone do FourSquare das redes sociais (classe '.social').
                        <br/>
                        <a href="exercicio-3-3.php" title="Acessar exercício 3.3." alt="Acessar exercício 3.3." rel="next" target="_blank"><b>Exercício 3.3. </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                </ol>
            </article>
        </section>
    </main>
    <?php include_once('footer.php'); ?>
</body>
</html>