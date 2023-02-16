<?php

namespace App\Solid;

use App\Solid\ShapeInterface;

class Triangle implements ShapeInterface
{
    public $base;
    public $height;

    public function __construtor($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function area()
    {
        return ($this->base * $this->height) / 2;
    }
}