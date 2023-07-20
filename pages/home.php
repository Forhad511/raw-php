<?php
    include 'header.php';

    if (! isset($_SESSION['user_id']))
    {
        header('location: action.php?page=login');
    }
?>

<section class="py-3">
    <div class="container">
        <div class="col">
            <h1>This is Home page</h1>
        </div>
    </div>

</section>




<?php include 'footer.php'; ?>
