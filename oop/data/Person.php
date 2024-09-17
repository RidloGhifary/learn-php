<?php

class Person
{
  const AUTHOR = "Ridlo achmad ghifary";

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

  function info()
  {
    echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
  }
}
