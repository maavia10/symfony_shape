<?php


namespace App\DependencyInjection;


class CircleHelper
{

    public function getCircumference($radius)
    {

        return 2 * $radius * pi();
    }
    public function getSurface($radius)
    {

        return 2 * $radius *$radius* pi();
    }

}