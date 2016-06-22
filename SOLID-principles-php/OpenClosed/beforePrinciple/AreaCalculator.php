<?php

namespace SOLID\OpenClosed\beforePrinciple;

class AreaCalculator {

    public function calculate($shapes){

        foreach ($shapes as $shape)
        {
            if ($shape instanceof Rectangle)
                $area[] = $shape->width * $shape->heigth;
            elseif (is_a($shape,'Circle')) // same as instanceof
                $area[] = $shape->radius * $shape->radius * pi();
        }

        return array_sum($area);
    }

}