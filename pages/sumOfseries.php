<?php
include 'header.php';

if (! isset($_SESSION['user_id']))
{
    header('location: action.php?page=login');
}
?>

<section class="py-5 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-dark">
                    <div class="card-header">
                        <h2 class="text-center text-white">Sum Of Series</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php?page=sum-of-series-result" method="post">
                            <div class="row mt-3">
                                <label class="col-md-4 text-white">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="first_number" class="form-control" placeholder="First Number">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-md-4 text-white">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="last_number" class="form-control" placeholder="Last Number">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-md-4 text-white">Series</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="" cols="30" rows="10"><?php echo isset($result) ? $result : ""; ?></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Get Series">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>
