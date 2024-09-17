<?php

class Manager
{
  var string $name;
  var string $title;

  public function __construct(string $name = "", string $title = "Manager")
  {
    $this->name = $name;
    $this->title = $title;
  }

  function sayHello(string $name)
  {
    echo "Hi $name, My name is Manager $this->name" . PHP_EOL;
  }
}

class VicePresident extends Manager
{
  public function __construct(string $name = '')
  {
    parent::__construct($name, "Vice President");
  }

  function sayHello(string $name)
  {
    echo "Hi $name, My name is Vice President $this->name" . PHP_EOL;
  }
}
