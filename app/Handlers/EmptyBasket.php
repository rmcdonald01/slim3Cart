<?php

namespace Cart\Handlers;

use Cart\Handlers\Contracts\HandlerInterface;

/**
 * EmptyBasket
 */
class EmptyBasket implements HandlerInterface
{

  public function handle($event)
  {
    $event->basket->clear();
  }

}
