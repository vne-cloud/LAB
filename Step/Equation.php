<?php

namespace Step;


class Line
{
    public function equation($a, $b)
    {
        if ($a == 0) {
            return NULL;
        }
        return $this->X = -($b / $a);
    }

    protected $X;
}

?>
