<?php

use Cart\App;
use Illuminate\Database\Capsule\Manager as Capsule;

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new App;

$capsule = new Capsule;
$capsule->addConnection([
  'driver'  =>  'mysql',
  'host'    =>  'localhost',
  'database'  => 'slim3cart',
  'username'  =>  'root',
  'password'  =>  'toor',
  'charset'   =>  'utf8',
  'collation' =>  'utf8_unicode_ci',
  'prefix'    =>  ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();


require __DIR__ . '/../app/routers.php';
