<?php
include_once "Stack.php";
$stack = new Stack();
$stack->push(6);
$stack->push(15);
$stack->push(5);
$stack->push(56);
$stack->push(7);
$stack->push(8);
$stack->push(32);
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
echo "<pre>";
var_dump($stack->getNewStack());
echo "<br>";
var_dump($stack->getStack());