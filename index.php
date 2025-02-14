<?php
require 'vendor/autoload.php';
require 'database.php';

use App\Models\Actor;
use App\Models\Film;


$peliculas=Film::all();

foreach ($peliculas as $value) {
    echo $value->title;
    foreach ($value->actors as $a) {
        echo $a->first_name.",";
    }
    echo "<br>";
    
}