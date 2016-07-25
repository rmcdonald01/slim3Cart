<?php

use Cart\App;
use Slim\Views\Twig;
//use Braintree_Configuration;
use Illuminate\Database\Capsule\Manager as Capsule;

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new App;

$container = $app->getContainer();

$capsule = new Capsule;
$capsule->addConnection([
  'driver'  =>  'mysql',
  'host'    =>  'localhost',
  'database'  => 'slim3cart',
  'username'  =>  'homestead',
  'password'  =>  'secret',
  'charset'   =>  'utf8',
  'collation' =>  'utf8_unicode_ci',
  'prefix'    =>  ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

//change to env - Braintree Drop-in UI
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('ft9s97qs678ryn5w');
Braintree_Configuration::publicKey('nvn7mjyxztsm8hx6');
Braintree_Configuration::privateKey('d8ba383d6c336f9cdc4bc3921b865939');


require __DIR__ . '/../app/routers.php';

$app->add(new \Cart\Middleware\ValidationErrorsMiddleware($container->get(Twig::class)));
$app->add(new \Cart\Middleware\OldInputMiddleware($container->get(Twig::class)));
