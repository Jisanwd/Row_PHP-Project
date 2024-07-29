
<?php include 'header.php';?>

<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header"><h1 class="text-center">Word Count</h1></div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <div class="col-md-3">Enter Text</div>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="given_string">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">Result</div>
                                <div class="col-md-9">
                                    <textarea id="" readonly cols="50" rows="5" class="form-control"><?php
                                        echo isset($data) ? $data ['given_string'] : "";
                                        echo "\n";
                                        echo isset($data) ? $data ['total_word'] : "";
                                        echo "\n";
                                        echo isset($data) ? $data ['total_char'] : "";
                                        ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="word_count_btn" value="   Count  ">
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


