<?php

use Illuminate\Database\Seeder;

use App\Genre;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $generos = Genero::all();
        // $generos->delete();

        // $genero = Genero::create('name'=>'Comédia','ranking'=>1)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Terror','ranking'=>2)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Drama','ranking'=>3)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Ação','ranking'=>4)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Ficção Científica','ranking'=>5)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Suspense','ranking'=>6)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Animação','ranking'=>7)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Aventura','ranking'=>8)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Documentário','ranking'=>9)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Infantil','ranking'=>10)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Fantasia','ranking'=>11)                
        // $genero->active = true;
        // $genero->save();

        // $genero = Genero::create('name'=>'Musical','ranking'=>2)                
        // $genero->active = true;
        // $genero->save();

        // CRIANDO GENEROS PELO SEEDS DE ACORDO COM DEFINIÇÃO DA FACTORY
        $generos = factory(Genre::class)->times(5)->create();

    }
}
