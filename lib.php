<?php

use Ds\Deque;

function sa(Deque &$la): void {
    if ($la->count() > 1){
        [$f, $l] = [$la->shift(), $la->pop()];
        $la->unshift($l);
        $la->push($f);
    }
}

function sb(Deque &$lb): void {
    if ($lb->count() > 1){
        [$f, $l] = [$lb->shift(), $lb->pop()];
        $lb->unshift($l);
        $lb->push($f);
    }
}

function sc(Deque &$la, Deque &$lb): void {
    sa($la);
    sb($lb);
}

function pa(Deque &$la, Deque &$lb): void {
    if($lb->count() > 0)
        $la->unshift($lb->shift());
}

function pb(Deque &$la, Deque &$lb): void {
    if($la->count() > 0)
        $lb->unshift($la->shift());
}

function ra(Deque &$la): void {
    $la->push($la->shift());
}

function rb(Deque &$lb): void {
    $lb->push($lb->shift());
}

function rr(Deque &$la, Deque &$lb): void {
    ra($la);
    rb($lb);
}

function rra(Deque &$la): void {
    $la->unshift($la->pop());
}

function rrb(Deque &$lb): void {
    $lb->unshift($lb->pop());
}

function rrr(Deque &$la, Deque &$lb): void {
    rra($la);
    rrb($lb);
}