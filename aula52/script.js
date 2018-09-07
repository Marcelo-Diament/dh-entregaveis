// RESET
window.onload = function(){

    // EXERCÍCIO 01

    const botaoInicial = document.querySelector('#cliqueAqui')
    const cliqueCounter = document.createElement('p')
    document.body.appendChild(cliqueCounter)
    let cliques = 0
    
    botaoInicial.addEventListener('click', function(){
            cliques = parseInt(cliques + 1)
            if (cliques%2 == 0){
                document.body.style = "background-color: blue;"
            } else {
                document.body.style = "background-color: red;"
            }
            alert('Você já clicou ' + cliques + ' vezes!')
            cliqueCounter.textContent = 'Você já clicou '+cliques+' vezes!'
        }
    );

    //  EXERCÍCIO 2
    document.addEventListener('keypress', function(event){
        let pressionou = event.keyCode;
        if(pressionou == 83){
            botaoInicial.removeEventListener()
        }
    })

}
    

