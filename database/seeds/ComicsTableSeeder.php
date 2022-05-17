<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listComics = config('comics');

        foreach ($listComics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            //floatval(mixed $value): float
            $newComic->price = floatval($comic["price"]);
            $newComic->series = $comic["series"];
            /* DateTime::createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null): DateTime|false */
            $newComic->sale_date = DateTime::createFromFormat("Y-m-d", $comic["sale_date"]);
            $newComic->type = $comic["type"];

            $newComic->save();
        }
    }
}
