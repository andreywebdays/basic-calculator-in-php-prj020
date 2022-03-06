<?php

class clsCalculate {
    public $operator;
    public $num_1;
    public $num_2;

    public function __construct(string $operator, int $num_1, int $num_2)
    {
        $this->operator = $operator;
        $this->num_1 = $num_1;
        $this->num_2 = $num_2;
    }

    public function calculate()
    {
        switch ($this->operator) 
        {
            case 'add':
                $result = $this->num_1 + $this->num_2;
                break;
            case 'sub':
                $result = $this->num_1 - $this->num_2;
                break;
            case 'div':
                $result = $this->num_1 / $this->num_2;
                break;
            case 'mul':
                $result = $this->num_1 * $this->num_2;
                break;
            default:
                $result = "Error!";
                break;
        }

        return $result;
    }
}