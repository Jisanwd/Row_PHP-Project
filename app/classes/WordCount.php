<?php


namespace App\classes;


class WordCount
{
    public $givenString,$totalWord,$totalChar,$result = [];

    public function __construct($post)
    {
        $this->givenString = $post ['given_string'];
    }

    public function index()
    {
        $this->totalWord = str_word_count($this->givenString);
        $this->totalChar  = strlen($this->totalChar);


        $this->result = [

            'given_string' => ' Given String is: '.$this->givenString,
            'total_word' => ' Total Word is: '.$this->totalWord,
            'total_char' => ' Total Char is: '.$this->totalChar,
        ];
        return $this->result;
    }
}