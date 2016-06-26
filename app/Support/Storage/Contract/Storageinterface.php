<?php

namespace Cart\Support\Storage\Contract;

interface StorageInterface
{
  public function get($index);

  public function set($index, $value);

  public function all();

  public function exists($index);

  public function remove($index);

  public function clear();



}

 ?>
