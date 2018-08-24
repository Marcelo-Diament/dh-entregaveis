// Exercício 1.1.
function elevarAoQuadrado(a,b){
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
