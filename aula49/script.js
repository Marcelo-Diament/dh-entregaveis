// RESET
window.onload = function(){
// EXERCÍCIO 01

    // Exercício 1.2.
    const botao1 = document.createElement('button')
    botao1.innerHTML = 'Cumprimentar'
    document.body.appendChild(botao1)
    botao1.onclick = function(){alert('Olá')}

    // Exercício 1.3.
    const botao2 = document.createElement('button')
    botao2.innerHTML = 'Alterar Fundo'
    document.body.appendChild(botao2)
    botao2.onclick = function(){
        document.body.style.background = 'rgb('+Math.random()*255+','+Math.random()*255+','+Math.random()*255+')'
    }

    // Exercício 1.4.
    const imagem = document.createElement('img')
    imagem.setAttribute('src', 'img/js-logo.png')
    imagem.style.height = '200px'
    imagem.style.width = '200px'
    imagem.style.margin = 'auto'
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
       imagemVisivel.innerHTML = 'Vendo Imagem'
   }

    // Exercício 1.6.

    const mudarFundo = function(){
        this.style.backgroundColor = "red"
    }

    document.body.addEventListener('onclick', mudarFundo)

    // Exercício 1.7.
    document.body.removeEventListener('onclick', mudarFundo)

    // Exercício 1.8.
    

    // Exercício 1.9.



// EXERCÍCIO 02

    // Exercício 2.1.
    

    // Exercício 2.2.
    

    // Exercício 2.3.
    

    

}