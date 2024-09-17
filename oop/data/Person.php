<?php

class Person
{
  var string $name;
  var ?string $city = null;
  var string $country = "Indonesia";

  function sayHello(?string $name)
  {
    if (is_null($name)) {
      echo "Hi, My name is {$this->name}" . PHP_EOL;
    } else {
      echo "hello $name, My name is {$this->name}" . PHP_EOL;
    }
  }
}
