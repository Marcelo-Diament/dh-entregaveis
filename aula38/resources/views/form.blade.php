<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
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
                Filme Cadastrado com Sucesso
            @endif

            @if (isset($ocorreuErro) && $ocorreuErro)
                Ops, filme não cadastrado...
            @endif
        
        <h1 align="center">Formulário</h1>
        <form id="adicionarFilme" name="adicionarFilme" method="POST" action="/cadastrarFilme">
            {{ csrf_field() }}
            <div class="form-group col-6 m-auto">
                <label for="title">Título</label>
                <input type="text" class="form-control" name="title" id="title" required value="{{old('title')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="rating">Classificação</label>
                <input type="number" class="form-control" name="rating" id="rating" required value="{{old('rating')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="awards">Prêmios</label>
                <input type="number" class="form-control" name="awards" id="awards" required value="{{old('awards')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="length">Duração</label>
                <input type="number" class="form-control" name="length" id="length" required value="{{old('length')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="release_date">Release Date</label>
                <input type="date" class="form-control" name="release_date" id="release_date" required value="{{old('release_date')}}"/>
                <!-- <label>Data de estreia</label>
                <select name="dia" class="form-control">
                    <option value="">Dia</option>
                      @for ($i=1; $i < 32; $i++)
                        <option value="<?php //echo $i; ?>"><?php //echo $i; ?></option>
                      @endfor
                </select>
                  <select name="mes" class="form-control">
                    <option value="">Mês</option>
                    @for ($i=0; $i < 13; $i++)
                      <option value="<?php //echo $i; ?>"><?php //echo $i; ?></option>
                    @endfor
                    </select>
                  <select name="ano" class="form-control">
                    <option value="">Ano</option>
                    @for ($i=2019; $i >= 1900; $i--)
                      <option value="<?php //echo $i; ?>"><?php //echo $i; ?></option>
                    @endfor
                  </select> -->
                </div>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
