<?php

namespace Cart\Handlers;

use Cart\Handlers\Contracts\HandlerInterface;


class RecordSuccessfulPayment implements HandlerInterface
{

  protected $transactionID;

  public function __construct($transactionID)
  {
    $this->transactionID = $transactionID;
  }

  public function handle($event)
  {
    $event->order->payment()->create([
      'failed'          => false,
      'transaction_id'  => $this->transactionID
    ]);
  }

}
