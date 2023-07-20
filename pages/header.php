<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
</head>
<body>
<?php if (isset($_SESSION['user_id'])) { ?>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li><a href="action.php?page=fullname" class="nav-link">Full Name</a></li>
            <li><a href="action.php?page=calculator" class="nav-link">Calculator</a></li>
            <li><a href="action.php?page=series-program" class="nav-link">Series Program</a></li>
            <li><a href="action.php?page=odd-even" class="nav-link">Odd Even Number</a></li>
            <li><a href="action.php?page=sum-of-series" class="nav-link">Sum Of Series</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['user_name']?></a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a href="" class="dropdown-item">Profile</a></li>
                    <li><a href="action.php?page=logout" class="dropdown-item">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<?php } ?>

