
<?php include 'header.php';?>

<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header"><h1>Odd-Even Series Program</h1></div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <div class="col-md-3">Starting Number</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="starting_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Ending Number</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="ending_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Your Choice</div>
                                <div class="col-md-9">
                                    <label> <input type="radio" name="choice" value="odd"> odd </label>
                                    <label> <input type="radio" name="choice" value="even"> even </label>
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
                                    <input type="submit" class="btn btn-outline-success" name="odd_even_series_btn" value="Make Series">
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


