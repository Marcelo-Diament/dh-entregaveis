// RESET
window.onload = function(){
// EXERCÍCIO 01

    let formulario = document.forms[0]
    

    formulario.onsubmit = function(event){
        event.preventDefault()

        // let nome = this.nome
        // let email = this.email
        // let senha = this.senha
        // let senha2 = this.senha2
        // let genero = this.sexo
       
        
        

        // Exercício A
        let existemErrosInput = false
        let existemErrosRadio = false
        const elementos = formulario.elements.length

            for (i = 0; i < elementos; i++){
                if (formulario.elements[i].value === ""){
                formulario.elements[i].placeholder = 'Campo obrigatório'
                formulario.elements[i].style = "background-color: #ffcc66"
                existemErrosInput = true
                }
            }

            if (formulario.elements['sexo'][0].checked === false && formulario.elements['sexo'][1].checked === false && formulario.elements['sexo'][2].checked === false){
                    formulario.elements['sexo'][0].setAttribute('class', 'erro')
                    formulario.elements['sexo'][1].setAttribute('class', 'erro')
                    formulario.elements['sexo'][2].setAttribute('class', 'erro')
                    existemErrosRadio = true
            }
            
            let generoRadio = document.querySelector('.erro')
            

            if (formulario.elements['sexo'][0].checked === true || formulario.elements['sexo'][1].checked === true || formulario.elements['sexo'][2].checked === true){

            
            
            generoRadio.onclick = 
                    formulario.elements['sexo'][0].removeAttribute('class')
                    formulario.elements['sexo'][1].removeAttribute('class')
                    formulario.elements['sexo'][2].removeAttribute('class')
                    existemErrosRadio = false
            
            }
            
        }
    }
    

