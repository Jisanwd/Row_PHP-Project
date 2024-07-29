<?php


namespace App\classes;


class OddEvenSeries
{
    public $startingNumber;
    public $endingNumber;
    public $choice;
    public $result;
    public $series;
    public $modiulas;

    public function __construct($post)
    {
        $this->startingNumber = $post ['starting_number'];
        $this->endingNumber   = $post ['ending_number'];


        if (isset($post['choice']))
        {
            $this->choice = $post['choice'];
        }
    }

    public function getResult()
    {
        if ($this->startingNumber < $this->endingNumber)
        {
            for ($this->startingNumber; $this->startingNumber <= $this->endingNumber;$this->startingNumber++)
            {
                if ($this->choice == 'odd')
                {
                    if ($this->startingNumber % 2 == 1)
                    {
                        $this->result.= $this->startingNumber.' ';
                    }
                }
                elseif ($this->choice == 'even')
                {
                    if ($this->startingNumber % 2 == 0)
                    {
                        $this->result.= $this->startingNumber.' ';
                    }
                }
            }
        }

        elseif ($this->startingNumber > $this->endingNumber)
        {
            for ($this->startingNumber; $this->startingNumber >= $this->endingNumber;$this->startingNumber--)
            {
                if ($this->choice == 'odd')
                {
                    if ($this->startingNumber % 2 == 1)
                    {
                        $this->result.=$this->startingNumber.' ';
                    }
                }
                elseif ($this->choice == 'even')
                {
                    if ($this->startingNumber % 2 == 0)
                    {
                        $this->result.=$this->startingNumber.' ';
                    }
                }
            }
        }
        return $this->result;
    }
}