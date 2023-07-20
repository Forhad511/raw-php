<?php
include 'header.php';

if (! isset($_SESSION['user_id']))
{
    header('location: action.php?page=login');
}
?>
<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">Full Name Program</div>
                    <div class="card-body bg-dark" >
                        <form action="action.php?page=fullname" method="POST">
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Enter Your First Name" name="first_name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Enter Your Last Name" name="last_name"/>
                                </div>
                            </div>
                            <div class="row mb-3 text-white">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo $message; ?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Make Full Name"/>
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

