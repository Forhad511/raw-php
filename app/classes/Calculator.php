<?php


namespace App\classes;


class Calculator
{
    public $firstNumber, $lastNumber, $result , $choice;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'];
        $this->lastNumber = $post['last_number'];
        $this->choice = $post['choice'];
    }
    public function getresult()
    {
        switch ($this->choice)
        {
            case '+' : $this->result = $this->firstNumber + $this->lastNumber;
                break;
            case '-' : $this->result = $this->firstNumber - $this->lastNumber;
                break;
            case '*' : $this->result = $this->firstNumber * $this->lastNumber;
                break;
            case '/' : $this->result = $this->firstNumber / $this->lastNumber;
                break;
            case '%' : $this->result = $this->firstNumber % $this->lastNumber;
                break;
        }
        return $this->result;
    }
}