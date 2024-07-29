
<?php include 'header.php'?>
<div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="slider">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/s1.jpg" alt="" class="w-100">
            <div class="carousel-caption">
                <h2>This is Image Caption</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam asperiores excepturi illum impedit ipsum, iste neque porro quaerat tempora tempore, voluptate. Aliquid cum deleniti error nemo non sapiente.</p>
                <a href="" class="btn btn-success">Read More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/s2.jpg" alt="" class="w-100">
            <div class="carousel-caption">
                <h2>This is Image Caption</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi cum, ipsam iure libero nostrum porro repellendus! Accusantium aspernatur aut eveniet ex excepturi fugit officia praesentium quo, sunt ut voluptates.</p>
                <a href="" class="btn btn-success">Read More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/s3.jpg" alt="" class="w-100">
            <div class="carousel-caption">
                <h2>This is Image Caption</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam dolores eveniet explicabo inventore labore, laborum libero minus nisi nulla perspiciatis quasi, quisquam tenetur! Dolores eos natus officia officiis rem!</p>
                <a href="" class="btn btn-success">Read More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/s4.jpg" alt="" class="w-100">
            <div class="carousel-caption">
                <h2>This is Image Caption</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur cumque deleniti enim eveniet ex expedita facere facilis harum incidunt iste optio perferendis, quae recusandae temporibus tenetur totam vel vitae!</p>
                <a href="" class="btn btn-success">Read More</a>
            </div>
        </div>
    </div>

    <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#slider" class="carousel-control-next" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
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