<?php

class Person
{
  var string $name;
  var ?string $city = null;
  var string $country = "Indonesia";

  function sayHello(string $name)
  {
    echo "hello $name" . PHP_EOL;
  }
}
