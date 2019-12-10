<?php

class Triagle
{
    private int $a;
    private int $b;
    private int $c;

    public function getA(): int
    {
        return $this->a;
    }

    public function setA(int $a): void
    {
        $this->a = $a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function setB(int $b): void
    {
        $this->b = $b;
    }

    public function getC(): int
    {
        return $this->c;
    }

    public function setC(int $c): void
    {
        $this->c = $c;
    }
}
?>
