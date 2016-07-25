<?php

namespace Cart\Models;

use Cart\Models\Address;
use Cart\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

  protected $fillable = [
      'failed',
      'transaction_id',
  ];

}
