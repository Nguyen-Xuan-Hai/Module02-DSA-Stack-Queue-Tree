<?php
include_once "Symertrical.php";
$result = new Symertrical();
$result->setString('able was I ere I saw elba');
$result->pushArray();
//$result->pushQueue();
echo "<pre>";
print_r($result->queue);
print_r($result->stack);
print_r($result->testSymmetrical());