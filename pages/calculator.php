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
                    <div class="card-header text-center">Calculator Program</div>
                    <div class="card-body">
                        <form action="action.php?page=calculate" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="Enter Your First Number" name="first_number"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">Last Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="Enter Your Last Number" name="last_number"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">Your choice</label>
                                <div class="col-md-9">
                                    <label class="btn btn-outline-success"><input type="radio" name="choice" value="+"/> + </label>
                                    <label class="btn btn-outline-success"><input type="radio" name="choice" value="-"/> - </label>
                                    <label class="btn btn-outline-success"><input type="radio" name="choice" value="*"/> * </label>
                                    <label class="btn btn-outline-success"><input type="radio" name="choice" value="/"/> / </label>
                                    <label class="btn btn-outline-success"><input type="radio" name="choice" value="%"/> % </label>
                                </div>
                            </div>
                            <div class="row mb-3 text-white">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" value="<?php echo $message; ?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" value="calculate"/>
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
