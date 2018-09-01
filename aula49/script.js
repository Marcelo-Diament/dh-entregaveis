// RESET
window.onload = function(){
// EXERCÍCIO 01

    // Exercício 1.1.
        // Criando um container
        document.body.setAttribute('class', 'container')
        const row = document.createElement('div')
        document.body.appendChild(row)
        row.setAttribute('class', 'row')
        row.style = 'display:flex;justify-content:space-around'
        row.setInterval

    // Exercício 1.2.
    const botao1 = document.createElement('button')
    botao1.innerHTML = 'Cumprimentar'
    row.appendChild(botao1)
    botao1.onclick = function(){alert('Olá')}

    // Exercício 1.3.
    const botao2 = document.createElement('button')
    botao2.innerHTML = 'Alterar Fundo'
    row.appendChild(botao2)
    botao2.onclick = function(){
        document.body.style.backgroundColor = 'rgb('+Math.random()*255+','+Math.random()*255+','+Math.random()*255+')'
    }

    // Setando estilo do button
    botao1.style = 'padding:5px;margin:15px;background-color:#8acf17;color:#3b6808;font-weight: bolder;border-radius:16pt;border:3px solid #63a814; display:inline-block;min-width:300px;'
    botao2.style = 'padding:5px;margin:15px;background-color:#8acf17;color:#3b6808;font-weight: bolder;border-radius:16pt;border:3px solid #63a814; display:inline-block;min-width:300px;'

    // Exercício 1.4.
    const imagem = document.createElement('img')
    imagem.setAttribute('src', 'img/js-logo.png')
    imagem.setAttribute('class', 'col-12')
    imagem.style = 'height:200px;width:auto;margin:auto;display:block;position:absolute;top:10px;left:39.5%'
    document.body.appendChild(imagem)

    const imagemVisivel = document.createElement('p')
    imagemVisivel.innerHTML = 'Imagem Visível'
    document.body.appendChild(imagemVisivel)
    imagemVisivel.style.display = 'none'
    
    const vendoImagem = function(){
        imagemVisivel.style.display = 'block'
    }

    imagem.addEventListener('mouseover', vendoImagem)

    // Exercício 1.5.
   imagem.onclick = function(){
       imagemVisivel.innerHTML = 'Cliquei na Imagem'
   }

    // Exercício 1.6.
    function mudarCorFundo() {
        this.style.backgroundColor = 'rgb('+Math.random()*255+','+Math.random()*255+','+Math.random()*255+')'
    }

        // Aumentando a área do body para que a tela inteira seja clicável
        document.body.style = 'height:100vh;width:100vw;'

    document.body.addEventListener('click', mudarCorFundo);


    // Exercício 1.7.
    document.body.removeEventListener('click', mudarCorFundo);

    // Exercício 1.8.
    const formIdade = document.querySelector('#formIdade')
    const inputSubmit = document.querySelector('#inputSubmit')
    inputSubmit.style = 'padding:5px;margin:15px;background-color:#8acf17;color:#3b6808;font-weight: bolder;border-radius:16pt;border:3px solid #63a814; display:inline-block;min-width:50px;'
    c

    // Exercício 1.9.



// EXERCÍCIO 02

    // Exercício 2.1.
    

    // Exercício 2.2.
    

    // Exercício 2.3.
    

    

}