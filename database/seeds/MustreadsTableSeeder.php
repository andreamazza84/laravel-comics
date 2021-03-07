<?php

use App\Mustread;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class MustreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mustread_list = config('mustread');

        foreach ($mustread_list as $comic) {
            $newComic = new Mustread();
            $newComic->jingle = $comic['jingle'];
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->cover = $comic['cover'];
            $newComic->available = $comic['available'];
            $newComic->save();
        }
    }
}
