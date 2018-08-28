<?php include_once('head.php'); ?>
    <title>JavaScript - Aula 2 - JS + HTML</title>
</head>
<?php include_once('header.php'); ?>
    <main class="container">
        <section class="row">
            <article class="enunciado col-12">
                <h2 class="title"><i class="fas fa-terminal"></i> <b>JavaScript II | JS + HTML</b></h2>
                <small>Professores Digital House: Thiago M. Medeiros, Thomas Staziak</small>
                <br/>
                <small>Aula realizada em 27 de Agosto de 2018</small>
            </article>
            <article class="resposta col-12">
                <h2 class="title"><i class="fas fa-code"></i> <b>Exercícios</b></h2>
                <br/>
                <ol type="1">
                    <li>Criar um documento html e adicionar a tag <code>< script ></code> contendo um alert no momento em que a página terminar de carregar. Lembre-se de utilizar:
                        <br/>
                        <code>
                            window.onload = function() {
                                //isso é executado quando a página é carregada
                            };
                        </code>
                        <br/>
                        <a href="exercicio-1.php" title="Acessar exercício 1" alt="Acessar exercício 1" rel="next" target="_blank"><b>Exercício 1 </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Adicionar um prompt que pergunte o nome do usuário e, em seguida, execute um alert que diga “Bem-vindo, XX”, em que XX é o nome inserido.
                        <br/>
                        <a href="exercicio-2.php" title="Acessar exercício 2" alt="Acessar exercício 2" rel="next" target="_blank"><b>Exercício 2 </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Adicionar um confirm que pergunte se o usuário tem mais de 18 anos e, caso ele seja menor de idade, faça o redirecionamento para http://www.disney.com.br, utilizando location
                        <br/>
                        <a href="exercicio-3.php" title="Acessar exercício 3" alt="Acessar exercício 3" rel="next" target="_blank"><b>Exercício 3 </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Escrever um console.log que mostre o endereço URL da página atual.
                        <br/>
                        <a href="exercicio-4.php" title="Acessar exercício 4" alt="Acessar exercício 4" rel="next" target="_blank"><b>Exercício 4 </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                    <li>Criar outro documento html que importe o arquivo script.js para fazer o seguinte:
                        <br/>
                        <ol>
                            <li>Pedir 2 números ao usuário</li>
                            <li>Quando terminar, perguntar ao usuário se ele tem certeza dos números inseridos. Caso contrário, voltar ao ponto anterior.</li>
                            <li>Usar alert()​ para informar o maior número ao usuário.</li>
                        </ol>
                        <a href="exercicio-5.php" title="Acessar exercício 5" alt="Acessar exercício 5" rel="next" target="_blank"><b>Exercício 5 </b></a><i class="fas fa-external-link-alt" style="font-size:12pt; margin-left:5px;padding-bottom:5px;"></i>
                        <br/>
                    </li>
                </ol>
            </article>
        </section>
    </main>
<?php include_once('footer.php'); ?>
</body>
</html>