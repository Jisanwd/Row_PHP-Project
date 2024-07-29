
<?php include 'header.php';?>

<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header"><h1>Odd-Even Check Program</h1></div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <div class="col-md-3">Enter Number</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="enter_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Result</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo $result;?>" name="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="odd_even_btn" value="Check Number">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>


