// Exercício 1.1.
function elevarAoSegundo(a,b){
    let resultado1_1 = a**b
    console.log('Exercício 1.1.', resultado1_1)
}

// Exercício 1.2.
let quadrado = function(a){
    let resultado1_2 = a**2
    console.log('Exercício 1.2.', resultado1_2)
}

// Exercício 1.3.
// function atribuicao() {
//     var numero = 5;
// }
// console.log(numero);
let atribuicao = function(numero){
    return numero
}
let numero = 5
console.log('Exercício 1.3.', atribuicao(numero))

// Exercício 1.4.
function trianguloRetangulo(a,b){
    function hipotenusa(a,b){
        let hipotenusa = Math.sqrt(a**2 + b**2)
        return hipotenusa
    }
    let perimetroTriangulo = a + b + hipotenusa(a,b)
    console.log('Exercício 1.4.', perimetroTriangulo)
}

// Exercício 1.5.
function meuSanduiche(a, b, callback){
    console.log('Estou comendo um sanduíche de '+a+' com '+b+'...')
    setTimeout(function(){
        callback()}, 1000)
}
     
function callback(){
    console.log('Terminei de comer meu sanduíche.')
}

// Exercício 2.1.
let listaNumeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

let porSete = listaNumeros.filter(function(numero) {
 return (numero%7 == 0)
})

let multiplosDeSete = porSete.forEach(function(value){
    console.log(value+' é múltiplo de 7')
})

// Exerício 2.2.

let raizesQuadradasForEach = listaNumeros.forEach(function(value){
    console.log(Math.sqrt(value))
})

let raizesQuadradasMap = listaNumeros.map(function(value){
    console.log(Math.sqrt(value))
})

// Exercício 2.3.

let enigma = ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,"r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6]

let valoresAlfa = enigma.filter(function(value){
    return (typeof value !== 'number')
})

// Exercício 2.4.
let valoresNum = enigma.filter(function(value){
    return (typeof value === 'number')
})

let NumEnigma = valoresNum.reduce(function(soma, numero){
    return soma + numero
})
