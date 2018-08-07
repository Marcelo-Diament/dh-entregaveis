<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Ator</title>
    </head>
    <body>
        
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
        <h1 align="center">Formulário</h1>
        <form id="adicionarAtor" name="adicionarAtor" method="POST" action="/add">
            {{ csrf_field() }}
            <div class="form-group col-6 m-auto">
                <label for="first_name">Nome</label>
                <input type="text" class="form-control" name="first_name" id="first_name" value="{{request()->get('first_name')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="last_name">Sobrenome</label>
                <input type="text" class="form-control" name="last_name" id="last_name" value="{{request()->get('last_name')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="rating">Classificação</label>
                <input type="number" class="form-control" name="rating" id="rating" value="{{request()->get('rating')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="awards">ID do Filme Favorito</label>
                <input type="number" class="form-control" name="awards" id="awards" value="{{request()->get('awards')}}"/>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Ator" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
