<?php

use Ds\Deque;
require "./lib.php";

function init(Deque &$la, Deque &$lb, array $argv): void {
    array_shift($argv);
    $la->push(...$argv);
}

$la = new Deque();
$lb = new Deque();
$lb->push(15);

init($la, $lb, $argv);
rra($la);

print_r($la);
print_r($lb);