<?php

use Illuminate\Database\Seeder;

use App\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diretores = factory(Director::class, 10)->create();

        foreach ($diretores as $diretor){
            factory(Movie::class, 5)->create[
                'director_id' => $diretor->id;
            ]
        }
    }
}
