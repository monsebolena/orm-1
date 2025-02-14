<?php
require 'vendor/autoload.php';
require 'database.php';

use App\Models\Actor;
use App\Models\Film;


$peliculas=Film::all();

foreach ($peliculas as $value) {
    echo $value->title;
    foreach ($value->actors() as $actor) {
        echo $actor->first_name.",";
    }
    echo "<br>";
    
}