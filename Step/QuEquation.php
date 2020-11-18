<?php

namespace Step;

use core\EquationInterface;

class Sqr extends Line implements EquationInterface
{
    protected function dis($a, $b, $c)
    {
        $x = ($b ** 2) - 4 * $a * $c;
        return $x;
    }

    public function solve($a, $b, $c)
    {
        $x = $this->equation($b, $c);
        if ($a == 0) {
            return $this->equation($b, $c);
        }
        if ($x > 0) {
            return $this->X = array(
                -($b + sqrt($b ** 2 - 4 * $a * $c) / 2 * $a),
                -($b - sqrt($b ** 2 - 4 * $a * $c) / 2 * $a)
            );
        }
        if ($x == 0) {
            return $this->X = array(-($b / (2 * $a)));
        }
        return $this->X = NULL;
    }
}
?>