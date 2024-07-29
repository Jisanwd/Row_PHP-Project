<?php include 'header.php'?>

<section class="bg-info py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">Calculator Form</div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                        <div class="row mb-3">
                            <label class="col-md-3">Starting Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="starting_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Ending Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ending_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Choice</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="choice" value="+">+</label>
                                <label><input type="radio" name="choice" value="-">-</label>
                                <label><input type="radio" name="choice" value="*">*</label>
                                <label><input type="radio" name="choice" value="/">/</label>
                                <label><input type="radio" name="choice" value="%">%</label>
                            </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Result</label>
                            <div class="col-md-9">
                                <input type="text" value="<?php echo $result;?>" class="form-control">
                            </div>
                        </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="calculator_btn" value="Make Calculate">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>
