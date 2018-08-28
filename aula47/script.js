// EXERCÍCIO 01
    // window.onload = function() {
    //     alert("Página Carregada!")
    // };

// EXERCÍCIO 02
    // let nome = prompt('Qual o seu nome?')
    // alert('Seja bem vindo(a) '+nome)

// EXERCÍCIO 03
    // let maior = confirm('Se você tem mais de 18 anos, clique em OK')
    // if (maior = true){
    //     window.location = 'http://www.disney.com.br'
    // }

// EXERCÍCIO 04
    // console.log('A URL que você está é '+window.location.href)
    // alert('A URL que você está é '+window.location.href)

//EXERCÍCIO 05

    let numero1 = prompt('Por favor, insira um número qualquer')
    let numero2 = prompt('Agora insira mais um número, por obséquio')
    let confirmar = confirm('Então os números serão '+numero1+' '+numero2+', confirma?')

    if (confirmar == true){
        if (parseInt(numero1) > parseInt(numero2)){
            alert('O número '+numero1+' é o maior número.')
        } else if (parseInt(numero2) > parseInt(numero1)){
            alert('O número '+numero2+' é o maior número.')
        } else {
            alert('Você inseriu dois números iguais.')
        }
    }