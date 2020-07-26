<?php

use Ds\Deque;
require "./lib.php";

function sorted(Deque $l): bool{
    for($i = 0; $i < $l->count() - 1; $i++)
        if ($l[$i] > $l[$i + 1])
            return false;
    return true;
}

function minDeque(Deque $l): array{
    $min = PHP_INT_MAX;
    $offset = 0;
    for($i = 0; $i < $l->count(); $i++)
        if ($l[$i] < $min){
            $min = $l[$i];
            $offset = $i;
        }
    return [$min, $offset];
}

function sortDeque(Deque &$la, Deque &$lb): void{
    $str = "";
    while($la->count() > 0){
        [$min, $offset] = minDeque($la);
        if($la->count() / 2 > $offset)
            while($offset-- > 0)
                ra($la, $str);
        else while($offset++ < $la->count())
                rra($la, $str);
        pb($la, $lb, $str);
    }
    while($lb->count() > 0)
        pa($la, $lb, $str);
    echo rtrim($str, " ")."\n";
}

function init(Deque &$la, Deque &$lb, array $argv): void {
    array_shift($argv);
    $la->push(...$argv);
    if(!sorted($la))
        sortDeque($la, $lb);
}

$la = new Deque();
$lb = new Deque();

init($la, $lb, $argv);