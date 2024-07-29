<?php
require_once 'vendor/autoload.php';
use App\classes\Product;
use App\classes\Category;
use App\classes\FullName;
use App\classes\Calculator;
use App\classes\Series;
use App\classes\OddEveen;
use App\classes\OddEvenSeries;
use App\classes\WordCount;


$result = '';
$title  = '';

$category = new Category();
$categories = $category->getAllCategory();


if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $title  = 'Home Page';
        $product = new Product();
        $products  = $product->getAllProduct();
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'detail')
    {
        $title  = 'Detail Page';
        $id = $_GET['id'];
        $product= new Product();
        $singleProduct = $product->getProductById($id);
        include "pages/detail.php";
    }
    elseif ($_GET['page'] == 'category')
    {
        $title  = 'Category Page';
        $id = $_GET['id'];
        $product = new Product();
        $products  = $product->getProductByCategoryId($id);
        include 'pages/category-product.php';
    }
    elseif ($_GET['page'] == 'fullName')
    {
        $title  = 'FullName Page';
        include 'pages/fullName.php';
    }
    elseif ($_GET['page'] == 'calculator')
    {
        $title  = 'Calculator Page';
        include 'pages/calculator.php';
    }
    elseif ($_GET['page'] == 'series')
    {
        $title  = 'series Page';
        include 'pages/series.php';
    }
    elseif ($_GET['page'] == 'oddEven')
    {
        $title = 'OddEven Page';
        include 'pages/oddEven.php';
    }
    elseif ($_GET['page'] == 'odd-even-series')
    {
        $title = 'OddEven Series Page';
        include 'pages/odd-even-series.php';
    }
    elseif ($_GET['page'] == 'string')
    {
        $title = 'WordCount Page';
        include 'pages/string.php';
    }
}

elseif (isset($_POST['Full_Name_btn']))
{
    $fullName = new FullName($_POST);
   $result = $fullName->getFullName();
   include 'pages/fullName.php';
}
elseif (isset($_POST['calculator_btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->getResult();
    include 'pages/calculator.php';
}
elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
  $result =   $series->getResult();
    include 'pages/series.php';
}
elseif (isset($_POST['odd_even_btn']))
{
    $oddEven = new OddEveen($_POST);
    $result = $oddEven->getResult();
    include 'pages/oddEven.php';
}
elseif (isset($_POST['odd_even_series_btn']))
{
    $oddEvenSeries = new OddEvenSeries($_POST);
    $result = $oddEvenSeries->getResult();
    include 'pages/odd-even-series.php';
}


elseif (isset($_POST['word_count_btn'])) {
    $wordCount = new WordCount($_POST);
    $data = $wordCount->index();
    include 'pages/string.php';
}