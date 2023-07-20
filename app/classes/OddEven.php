<?php


namespace App\classes;


class OddEven
{
    public $firstNumber, $lastNumber, $choice, $result;

    public function __construct($post)
    {
        if($post)
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->choice = $post['choice'];
        }
    }

    public function getOddEvenResult ()
    {
        if ($this->firstNumber < $this->lastNumber)
        {
            $this->result = $this->lowerToUpper();
        }
        elseif ($this->firstNumber > $this->lastNumber)
        {
            $this->result = $this->upperToLower();
        }
        elseif ($this->firstNumber == $this->lastNumber)
        {
            $this->result = $this->firstNumber;
        }
        return rtrim($this->result, ',');
    }

    public function upperToLower ()
    {
        for ($this->lastNumber; $this->lastNumber <= $this->firstNumber; $this->lastNumber++)
        {
            if ($this->choice == 'odd')
            {
                if ($this->lastNumber % 2 == 1)
                {
                    $this->result .= $this->lastNumber.',';
                }
            } elseif ($this->choice == 'even')
            {
                if ($this->lastNumber % 2 == 0)
                {
                    $this->result .= $this->lastNumber.',';
                }
            }
        }
        return $this->result;
    }

    public function lowerToUpper ()
    {
        for ($this->firstNumber; $this->firstNumber <= $this->lastNumber; $this->firstNumber++)
        {
            if ($this->choice == 'odd')
            {
                if ($this->firstNumber % 2 == 1)
                {
                    $this->result .= $this->firstNumber.',';
                }
            } elseif ($this->choice == 'even')
            {
                if ($this->firstNumber % 2 == 0)
                {
                    $this->result .= $this->firstNumber.',';
                }
            }
        }
        return $this->result;
    }
}