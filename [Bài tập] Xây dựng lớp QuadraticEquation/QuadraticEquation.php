<?php


class QuadraticEquation
{
    private int $a;
    private int $b;
    private int $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        return $this->b ** 2 - 4 * $this->a * $this->c;
    }

    public function getRoot1()
    {
        return (-($this->b) + sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

    public function getRoot2()
    {
        return (-($this->b) - sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

    public function calculator()
    {
        if ($this->a == 0) {
            echo "Nghiem bang " . -$this->b / $this->c;
        } else {
            if ($this->getDiscriminant() < 0) {
                echo "The equation has no roots";
            } else if ($this->getDiscriminant() == 0) {
                echo "Nghiem kep = " . (-$this->b) / (2 * $this->a);
            } else {
                echo "2 nghiem phan biet r1= " . $this->getRoot1() . " va r2= " . $this->getRoot2();
            }
        }

    }

}