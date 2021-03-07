<?php

use App\Comic;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_list = config('comics');
        
        foreach ($comics_list as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->price = $comic['price'];
            $newComic->author = $comic['author'];
            $newComic->artist = $comic['artist'];
            $newComic->cover = $comic['cover'];
            $newComic->poster = $comic['poster'];
            $newComic->available = $comic['available'];
            $newComic->volume = $comic['volume'];
            $newComic->pages = $comic['pages'];
            $newComic->save();
        }
    }
}
