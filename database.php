<?php
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

// Configuración de la conexión
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',         // o 'sqlite', 'pgsql', 'sqlsrv'
    'host'      => '127.0.0.1',
    'database'  => 'sakila',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Hacer que Capsule esté disponible de manera global
$capsule->setAsGlobal();

// Arrancar Eloquent ORM
$capsule->bootEloquent();
