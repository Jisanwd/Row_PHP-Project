<?php


namespace App\classes;


class OddEveen
{
    public $enterNumber,$result,$modiulas;

    public function __construct($post)
    {
        $this->enterNumber = $post['enter_number'];
    }

    public function getResult()
    {
        $this->modiulas = $this->enterNumber % 2;

        if ($this->modiulas == 0)
        {
            return $this->result = 'This Is Even Number';
        }
        else
        {
            return $this->result = 'This Is Odd Number';
        }
    }
}