// Exercício 1.1.
function elevarAoSegundo(a,b){
    let resultado1_1 = a**b
    console.log('Exercício 1.1.', resultado1_1)
}

// Exercício 1.2.
let quadrado = function(a,b){
    let resultado1_2 = a**b
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