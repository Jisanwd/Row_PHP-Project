<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand">LOGO</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li><a href="action.php?page=home"" class="nav-link">Home</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                    <ul class="dropdown-menu">
                        <?php foreach ($categories as $category) {?>
                            <li><a href="action.php?page=category&&id=<?php echo $category['id'];?>" class="dropdown-item"><?php echo $category['name'];?></a></li>
                        <?php }?>

                    </ul>
                </li>
                <li><a href="action.php?page=fullName" class="nav-link">Full Name</a></li>
                <li><a href="action.php?page=calculator" class="nav-link">Calculator</a></li>
                <li><a href="action.php?page=series" class="nav-link">Series</a></li>
                <li><a href="action.php?page=oddEven" class="nav-link">OddEven</a></li>
                <li><a href="action.php?page=odd-even-series" class="nav-link">OddEvenSeries</a></li>
                <li><a href="action.php?page=string" class="nav-link">String</a></li>
            </ul>
        </div>
    </div>
</nav>


