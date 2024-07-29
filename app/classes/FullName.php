<?php


namespace App\classes;


class FullName
{
public $fastName;
public $lastName;
public $fullName;

public function __construct($post)
{
    $this->fastName  = $post['fast_name'];
    $this->lastName  = $post['last_name'];
}

public function getFullName()
{
 return   $this->fastName.''.$this->lastName;
}
}