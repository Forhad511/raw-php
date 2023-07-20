<?php


namespace App\classes;


class Series
{
    public $startingNumber, $endingNumber, $result,$i;

    public function __construct($post)
    {
        if (isset($post['starting_number']))
        {
            $this->startingNumber = $post['starting_number'];
            $this->endingNumber  = $post['ending_number'];
        }
    }
    public function getResult()
    {
        if ($this->startingNumber > $this->endingNumber)
        {
            return $this->getBigToSmallSeries();
        }
        else
        {
            return $this->getSmallToBigSeries();

        }


    }
    public function getBigToSmallSeries()
    {

        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }
    public function getSmallToBigSeries()
    {

        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }

}