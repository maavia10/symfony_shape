<?php


namespace App\Service;


use App\DependencyInjection\TriangleHelper;

class Triangle
{
    public const TITLE = 'triangle';

    public function __construct(
        private TriangleHelper $triangleHelper,

    )
    {
    }

    public function getSurface($a,$b,$c)
    {

        return $this->triangleHelper->getSurface($a,$b,$c);
    }

    public function getCircumference($a,$b,$c)
    {

        return $this->triangleHelper->getCircumference($a,$b,$c);

    }
}