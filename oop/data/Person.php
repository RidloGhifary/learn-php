<?php

class Person
{
  const AUTHOR = "Ridlo achmad ghifary";

  var string $name;
  var ?string $city = null;
  var string $country = "Indonesia";

  public function __construct(string $name, ?string $city)
  {
    $this->name = $name;
    $this->city = $city;
  }

  function sayHello(?string $name)
  {
    if (is_null($name)) {
      echo "Hi, My name is {$this->name}" . PHP_EOL;
    } else {
      echo "hello $name, My name is {$this->name}" . PHP_EOL;
    }
  }

  function info()
  {
    echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
  }
}
