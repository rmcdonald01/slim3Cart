<?php

namespace Cart\Controllers;

use Slim\Views\Twig;
use Cart\Models\Product;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * HomeController
 */
class HomeController
{
    public function index(Request $request, Response $response, Twig $view, Product $product )
    {
      $product = $product->get();
      var_dump($product);
      die;
      return $view->render($response, 'home.twig');
    }
}
