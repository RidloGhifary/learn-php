<?php

namespace RidloGhifary\Data;

class People
{

  private string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function sayHello(string $name)
  {
    return "Hello $name, My name is $this->name";
  }
}
