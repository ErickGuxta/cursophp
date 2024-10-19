<?php

$name = 'ERICK';

function sayHello(string $name): string
{
  return "Hello, " . $name;
}

echo sayHello($name); 
