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
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark">
                    <div class="card-header text-center text-white">Series  Program</div>
                    <div class="card-body">
                        <form action="action.php?page=series" method="POST">
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="Enter Starting Number" name="starting_number"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="Enter Eeding Number" name="ending_number"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control"><?php echo $message; ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Make series"/>
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

