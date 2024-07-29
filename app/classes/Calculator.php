<?php


namespace App\classes;


class Calculator
{
public $startingNumber, $endingNumber, $result, $choice;

public function __construct($post)
{
    $this->startingNumber = $post['starting_number'];
    $this->endingNumber   = $post['ending_number'];
    $this->choice         = $post['choice'];
}

    public function getResult()
    {
    switch ($this->choice)
    {
        case '+';
        $this->result = $this->addition();
        break;

        case '-';
            $this->result = $this->subtraction();
            break;
        case '*';
            $this->result = $this->multiplication();
            break;
        case '/';
            $this->result = $this->division();
            break;
        case '%';
            $this->result = $this->remainder();
            break;
    }
    return $this->result;
    }



public function addition()
{
    return $this->startingNumber + $this->endingNumber;
}
    public function subtraction()
    {
        return $this->startingNumber - $this->endingNumber;
    }
    public function multiplication()
    {
        return $this->startingNumber * $this->endingNumber;
    }
    public function division()
    {
        return $this->startingNumber / $this->endingNumber;
    }
    public function remainder()
    {
        return $this->startingNumber % $this->endingNumber;
    }
}