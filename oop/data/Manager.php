<?php

class Manager
{
  var string $name;

  function sayHello(string $name)
  {
    echo "Hi $name, My name is Manager $this->name" . PHP_EOL;
  }
}

class VicePresident extends Manager
{
  function sayHello(string $name)
  {
    echo "Hi $name, My name is Vice President $this->name" . PHP_EOL;
  }
}
