<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One|Raleway|VT323" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="60x60" href="../img/favicon.png">
        <script src="script.js"></script>
        <style>
            input[type='radio']:after {
                width: 15px;
                height: 15px;
                border-radius: 15px;
                top: -2px;
                left: -1px;
                position: relative;
                background-color: #d1d3d1;
                content: '';
                display: inline-block;
                visibility: visible;
                border: 2px solid #d1d3d1;
            }

            input[type='radio']:checked:after {
                width: 15px;
                height: 15px;
                border-radius: 15px;
                top: -2px;
                left: -1px;
                position: relative;
                background-color: #99ff33;
                content: '';
                display: inline-block;
                visibility: visible;
                border: 2px solid #99ff33;
            }

            input[type='radio'].erro:after {
                width: 15px;
                height: 15px;
                border-radius: 15px;
                top: -2px;
                left: -1px;
                position: relative;
                background-color: #ffcc66;
                content: '';
                display: inline-block;
                visibility: visible;
                border: 2px solid #ffcc66;
            }

            input[type='radio'] {
                -webkit-appearance: none !important;
                outline-style: none !important;
            }
        </style>
    </head>
    <body class="container">
        <section class="row">
            <article class="col-12">
                <p id="erro"></p>
            </article>
        </section>
        <section class="row">
            <article class="col-12">
                <h4>Preencha os dados abaixo corretamente</h4>
                <small>Atenção! Todos os campos são obrigatórios.</small>
                <br/><br/>
                <form id="formulario">
                    <label for="nome">Nome*: <input type="text" name="nome" id="nome" placeholder=" Insira seu nome"></label>
                    <br/><small id="erroNome"></small>
                    <br>
                    <label for="email">email*: <input type="email" name="email" id="email" placeholder=" Insira seu email"></label>
                    <br/><small id="erroEmail"></small>
                    <br/>
                    <label for="senha">Senha*: <input type="password" name="senha" id="senha" placeholder=" Insira sua senha"></label>
                    <br/><small id="erroSenha"></small>
                    <br/>
                    <label for="senha2">Confirmar Senha*: <input type="password" name="senha2" id="senha2" placeholder=" Confirme sua senha"></label>
                    <br/><small id="erroSenha"></small>
                    <br/>
                    <fieldset>
                        Gênero*:<br/>
                        <label for="masculino">
                            <input type="radio" name="sexo" value="masculino" id="masculino"> Masculino
                        </label>
                        <label for="feminino">
                            <input type="radio" name="sexo" value="feminino" id="feminino"> Feminimo
                        </label>
                        <label for="outro">
                            <input type="radio" name="sexo" value="outro" id="outro"> Prefiro não informar
                        </label>
                        <br/><small id="erroSexo"></small>
                    </fieldset>
                    <br/>
                    <input type="submit" id="inputSubmit" value="Enviar" id="enviar">
                    <input type="submit" id="inputReset" value="Limpar" id="limpar">
                </form>
            </article>
        </section>
    </body>
</html>
