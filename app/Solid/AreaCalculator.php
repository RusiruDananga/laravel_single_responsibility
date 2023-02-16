<?php

namespace App\Solid;

use App\Solid\ShapeInterface;
use Exception;

class AreaCalculator
{
    public function totalArea(ShapeInterface ...$shapes)
    {
        $area = 0;

        foreach($shapes as $shape)
        {
            $area += $shape->area();
        }

        return $area;
    }
}