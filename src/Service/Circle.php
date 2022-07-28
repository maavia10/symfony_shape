<?php


namespace App\Service;


use App\DependencyInjection\CircleHelper;

class Circle
{

    public function __construct(
        private CircleHelper $circle,
    )
    {

    }

    public const TITLE = 'circle';
    public function getCircumference($radius)
    {

        return $this->circle->getCircumference($radius);

    }

    public function getSurface($radius)
    {
        return $this->circle->getSurface($radius);

    }
}