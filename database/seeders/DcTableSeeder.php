<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dc;

class DcTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics=config("comics");
        $id = 1;
        foreach ($comics as $comic) {
            $newComic= new Dc();
            $newComic->id = $id;
            $id++;
            $newComic->title=$comic["title"];
            $newComic->description=$comic["description"];
            $newComic->thumb=$comic["thumb"];
            $newComic->price=$comic["price"];
            $newComic->series=$comic["series"];
            $newComic->sale_date=$comic["sale_date"];
            $newComic->type=$comic["type"];
            $newComic->save();
        }
    }
}
