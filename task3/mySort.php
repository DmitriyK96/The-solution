<?php

function mySort($a, $b)
{
    if ($a->getArea() == $b->getArea()) {
        return 0;
    }
    return ($a->getArea() < $b->getArea()) ? 1 : -1;
}