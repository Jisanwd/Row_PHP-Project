<?php


namespace App\classes;


class Category
{
public $categories = [];

public function __construct()
{
    $this->categories = [
        0 => [
            'id' => 1,
            'name' => 'Electronic',
            'image' => 'c1.jpg',
        ],
        1 => [
            'id' => 2,
            'name' => 'Man Fashion',
            'image' => 'c2.jpg',
        ],
        2 => [
            'id' => 3,
            'name' => 'WonMan Fashion',
            'image' => 'c3.jpg',
        ],
        3 => [
            'id' => 4,
            'name' => 'Kids Fashion',
            'image' => 'c4.jpg',
        ],
        4 => [
            'id' => 5,
            'name' => 'Food Item',
            'image' => 'c5.jpg',
        ],
    ];
}

public function getAllCategory()
{
    return $this->categories;
}
}