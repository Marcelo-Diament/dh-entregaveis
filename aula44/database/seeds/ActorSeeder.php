<?php

use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = factory(Actors::class, 50)->create();
        $movies = factory(Movies::class, 50)->create();

        foreach ($movies as $movie){
            $movie->atores()->sync($actors->random(3));
        }
    }
}
