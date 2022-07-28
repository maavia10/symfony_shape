<?php


namespace App\DependencyInjection;


class TriangleHelper
{

    public function getCircumference($a,$b,$c)
    {
            return $a + $b +$c;
    }

    public function getSurface($a,$b,$c)
    {

        $s = ($a + $b + $c) / 2;
        return sqrt($s * ($s - $a) *
            ($s - $b) * ($s - $c));
    }
}