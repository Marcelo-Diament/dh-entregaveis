<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Todos os Filmes</title>
    </head>
    <body>
        <br/><br/>
        <button name="adicionar" class="btn btn-primary"><a class="btn btn-primary" href="/adicionarFilme">Adicionar Novo</a></button>
        <br/><br/>
        @foreach ($filmes as $filme)
            {{ $filme->title}} | <a href="/filme/edit/{{$filme->id}}">Editar</a> | <a href="/filme/delete/{{$filme->id}}">Remover</a><br/>
        @endforeach
    </body>
</html>
