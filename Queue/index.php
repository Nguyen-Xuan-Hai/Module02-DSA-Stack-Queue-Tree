<?php
include_once "Queue.php";
$Queue = new Queue();
$Queue->enqueue(5);
$Queue->enqueue(6);
$Queue->enqueue(7);
$Queue->dequeue();
$Queue->dequeue();
var_dump($Queue->isEmpty());
$Queue->enqueue(11);
$Queue->enqueue(12);
$Queue->dequeue();
$Queue->dequeue();
$Queue->dequeue();
echo "<br>";
var_dump($Queue->isEmpty());
    echo "<pre>";
var_dump($Queue);