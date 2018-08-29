// RESET
window.onload = function(){
// EXERCÍCIO 01

    // Exercício 1.1.
    const titular = document.getElementById('titular')
    titular.style.display = 'none'

    // Exercício 1.2.
    const coruja = document.querySelector('#lechuza')
    coruja.style.filter = 'grayscale(100%)'

    // Exercício 1.3.
    const inputsForms = document.querySelectorAll('input')
    inputsForms.forEach(function(input){input.style.background = 'red'})

    const textAreaForms = document.querySelectorAll('textarea')
    textAreaForms.forEach(function(textarea){textarea.style.background = 'red'})

// EXERCÍCIO 02

    // Exercício 2.1.
    const copyright = document.querySelector('#copyright')
    console.log(copyright.attributes)

    // Exercício 2.2.
    const twitter = document.querySelector('.fa-twitter')
    console.log(twitter.getAttribute('href'))

    // Exercício 2.3.
    const facebook = document.querySelector('.fa-facebook')
    console.log(facebook.getAttribute('href'))

    // Exercício 2.4.
    const youtube = document.querySelector('.fa-youtube')
    youtube.setAttribute('href','https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA')

    // Exercício 2.5.
    const form = document.querySelector('form')
    console.log(form.hasAttribute('action'))

    // Exercício 2.6.
    form.removeAttribute('url')
    form.setAttribute('action', 'http://digitalhouse.com')

    // Exercício 2.7.
    const tagH2 = document.querySelectorAll('h2')
    tagH2.forEach(function(h2){h2.style.color = 'red'})

    // Exercício 2.8.
    const icones = document.querySelectorAll('.icon')
    icones.forEach(function(icon){icon.style.color = 'red'})

// EXERCÍCIO 3

    // Exercício 3.1.
    const divAbracadabra = document.querySelector('.u8')
    const botaoNovo = document.createElement('a')
    botaoNovo.setAttribute('class', 'button big scrolly')
    const botaoNovoTexto = document.createTextNode('Sumir com a Coruja')
    botaoNovo.appendChild(botaoNovoTexto)
    divAbracadabra.appendChild(botaoNovo)
    let visivel = true
    botaoNovo.addEventListener('click', function(){
        if (visivel == true) {
            visivel = false
            coruja.style.display = 'none'
            botaoNovoTexto.textContent = 'Devolve a coruja'
        } else {
            visivel = true
            coruja.style.display = 'block'
            botaoNovoTexto.textContent = 'Some com a coruja'
        }
    })

    // Exercício 3.2.
    document.querySelector('#top').textContent = 'Topo'
    document.querySelector('#work').textContent = 'Serviços'
    document.querySelector('#portfolio').textContent = 'Portfólio'
    document.querySelector('#contact').textContent = 'Contato'

    // Exercício 3.3.
    const socialMenu = document.querySelector('.social li')
    socialMenu.removeChild(socialMenu.lastChild)

}