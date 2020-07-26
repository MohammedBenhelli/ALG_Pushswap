<?php

use Ds\Deque;

function sa(Deque &$la, string &$str, bool $t = true): void {
    if ($la->count() > 1){
        [$f, $l] = [$la->shift(), $la->pop()];
        $la->unshift($l);
        $la->push($f);
    }
    if ($t) $str.="sa ";
}

function sb(Deque &$lb, string &$str, bool $t = true): void {
    if ($lb->count() > 1){
        [$f, $l] = [$lb->shift(), $lb->pop()];
        $lb->unshift($l);
        $lb->push($f);
    }
    if ($t) $str.="sb ";
}

function sc(Deque &$la, Deque &$lb, string &$str): void {
    sa($la, $str, false);
    sb($lb, $str, false);
    $str.="sc ";
}

function pa(Deque &$la, Deque &$lb, string &$str): void {
    if($lb->count() > 0)
        $la->unshift($lb->shift());
    $str.="pa ";
}

function pb(Deque &$la, Deque &$lb, string &$str): void {
    if($la->count() > 0)
        $lb->unshift($la->shift());
    $str.="pb ";
}

function ra(Deque &$la, string &$str, bool $t = true): void {
    $la->push($la->shift());
    if ($t) $str.="ra ";
}

function rb(Deque &$lb, string &$str, bool $t = true): void {
    $lb->push($lb->shift());
    if ($t) $str.="rb ";
}

function rr(Deque &$la, Deque &$lb, string &$str): void {
    ra($la, $str, false);
    rb($lb, $str, false);
    $str.="rr ";
}

function rra(Deque &$la, string &$str, bool $t = true): void {
    $la->unshift($la->pop());
    if ($t) $str.="rra ";
}

function rrb(Deque &$lb, string &$str, bool $t = true): void {
    $lb->unshift($lb->pop());
    if ($t) $str.="rrb ";
}

function rrr(Deque &$la, string &$str, Deque &$lb): void {
    rra($la, $str, false);
    rrb($lb,$str , false);
    $str.="rrr ";
}