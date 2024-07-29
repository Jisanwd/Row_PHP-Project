<?php


namespace App\classes;


class Product
{
public $products;
public $data = [];

public function __construct()
{
    $this->products = [
        '0' => [
            'id' => 1,
            'category_id' => 1,
            'name' => 'A new Mobile',
            'description' => 'This is a benco mobile description',
            'price'  => '18799.00',
            'image' => 'p1.jpg',
        ],
        '1' => [
            'id' => 2,
            'category_id' => 2,
            'name' => 'A new Fashionable ManT-Shirt',
            'description' => 'This is A new Fashionable ManT-Shirt description',
            'price'  => '1699.00',
            'image' => 'p2.jpg',
        ],
        '2' => [
            'id' => 3,
            'category_id' => 3,
            'name' => 'A new Fashionable Woman Jamdani-Shari',
            'description' => 'This A new Fashionable Woman Jamdani-Shari description',
            'price'  => '1599.00',
            'image' => 'p3.jpg',
        ],
        '3' => [
            'id' => 4,
            'category_id' => 4,
            'name' => 'A new Fashionable Kids-Fashion',
            'description' => 'This A new Fashionable Kids-Fashion description',
            'price'  => '1499.00',
            'image' => 'p4.jpg',
        ],
        '4' => [
            'id' => 5,
            'category_id' => 5,
            'name' => 'This is Indiyan Haydarabadi briyani',
            'description' => 'This This is Indiyan Haydarabadi briyani description',
            'price'  => '999.00',
            'image' => 'p5.jpg',
        ],
        '5' => [ 'id' => 6,
            'category_id' => 3,
            'name' => 'A new Fashionable Woman Jamdani-Shari',
            'description' => 'This A new Fashionable Woman Jamdani-Shari description',
            'price'  => '1799.00',
            'image' => 'p3.jpg',],
    ];
}
public function getAllProduct()
{
    return $this->products;
}

public function getProductById($id)
{
foreach ($this->products as $product)
{
    if ($product['id'] == $id)
    {
        return $product;
    }
}
}

public function getProductByCategoryId($id)
{
    foreach ($this->products as $product)
    {
        if ($product['category_id'] == $id)
        {
            array_push($this->data, $product);
        }
    }
    return $this->data;
}
}