<?php

interface HelloWorld
{
  function sayHello(string $name = null): void;
}

class SampleHello implements HelloWorld
{
  public function sayHello(string $name = null): void
  {
    $finalName = $name ?: "World";  // Fallback to "World" if $name is empty
    echo "Hello $finalName" . PHP_EOL;
  }
}

$helloWorld = new SampleHello();
$helloWorld->sayHello();       // Outputs: Hello World
$helloWorld->sayHello("Alice"); // Outputs: Hello Alice

$helloWorld2 = new class("Ridlo") implements HelloWorld
{

  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

  public function sayHello(string $name = null): void
  {
    $finalName = $name ?: $this->name;
    echo "Hello $finalName" . PHP_EOL;
  }
};

$helloWorld2->sayHello();
$helloWorld2->sayHello("Ghifary");
