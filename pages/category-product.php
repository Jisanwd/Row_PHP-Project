
<?php include 'header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) {?>
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="assets/img/<?php echo $product['image']; ?>" alt="" height="350">
                        <div class="card-body">
                            <h2><?php echo $product['name']; ?></h2>
                            <p>Tk.<?php echo $product['price']; ?></p>
                            <hr/>
                            <a href="action.php?page=detail&&id=<?php echo $product['id'];?>" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>



<?php include 'footer.php'?>
