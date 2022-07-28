<?php


namespace App\Controller;


use App\Service\Circle;
use App\Service\Triangle;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/{type}')]
class ShapeController
{

    public function __construct(
        private Circle $circle,
        private Triangle $triangle,
    ) {
    }

    #[Route('/{radius}', name: 'circle.route', requirements: ['radius' => '\d+'])]
    public function getCircleData(Request $request, $radius)
    {

        if ($request->get('type') != Circle::TITLE) {

            throw new NotFoundHttpException();
        }
        $radius = floatval($radius);
        return new JsonResponse([
            'type' => Circle::TITLE,
            'radius' => $radius,
            'surface' => $this->circle->getSurface($radius),
            'circumference' => $this->circle->getCircumference($radius),
        ]);
    }

    #[Route('/{a}/{b}/{c}', name: 'triangle.route')]
    public function getTriangleData(Request $request, $a, $b, $c)
    {

        if ($request->get('type') != Triangle::TITLE) {

            throw new NotFoundHttpException();
        }

        $a = floatval($a);
        $b = floatval($b);
        $c = floatval($c);

        return new JsonResponse([
            'type' => Triangle::TITLE,
            "a" => $a,
            "b" => $b,
            "c" => $c,
            'surface' => $this->triangle->getSurface($a,$b,$c),
            'circumference' => $this->triangle->getCircumference($a,$b,$c),
        ]);

    }

}