<?php
include "Stack.php";
$stack = new Stack();
echo $stack->push(5);
echo $stack->push(4);
echo $stack->push(3);
echo $stack->push(6);
echo $stack->push(9);
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();
echo $stack->push(7);
echo $stack->push(8);
echo "<br>";
var_dump($stack->isEmpty());
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();
echo $stack->pop();
echo "<br>";
var_dump($stack->isEmpty());
echo "<br>";
echo "<pre>";
var_dump($stack);