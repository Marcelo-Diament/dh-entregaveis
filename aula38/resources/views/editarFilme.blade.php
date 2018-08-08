<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Editar Filme</title>
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

            @if (isset($sucesso) && $sucesso)
                Filme Editado com Sucesso
            @endif

            @if (isset($ocorreuErro) && $ocorreuErro)
                Ops, filme não editado...
            @endif
        
        <h1 align="center">Formulário</h1>
        <form id="adicionarFilme" name="adicionarFilme" method="POST" action="/filme/edit/{{$filme->id}}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group col-6 m-auto">
                <label for="title">Título</label>
                <input type="text" class="form-control" name="title" id="title" required value="{{$filme->title}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="rating">Classificação</label>
                <input type="number" class="form-control" name="rating" id="rating" required value="{{$filme->rating}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="awards">Prêmios</label>
                <input type="number" class="form-control" name="awards" id="awards" required value="{{$filme->awards}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="length">Duração</label>
                <input type="number" class="form-control" name="length" id="length" required value="{{$filme->length}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="release_date">Release Date</label>
                <input type="date" class="form-control" name="release_date" id="release_date" required value="{{$filme->releas_date}}"/>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Atualizar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
