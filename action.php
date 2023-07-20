<?php
require_once 'vendor/autoload.php';
use App\classes\Auth;
use App\classes\User;
use App\classes\Calculator;
use App\classes\FullName;
use  App\classes\Series;
use App\classes\OddEven;
use App\classes\Serie;

$message= '';


if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['page'] == 'calculator')
    {
        include 'pages/calculator.php';
    }
    elseif ($_GET['page'] == 'calculate')
    {
        $calculator = new Calculator($_POST);
        $message = $calculator->getresult();
        include 'pages/calculator.php';
    }
    elseif ($_GET['page'] == 'fullname')
    {
        $fullName = new FullName($_POST);
        $message  = $fullName->makeFullName();
        include 'pages/fullname.php';
    }
    elseif ($_GET['page'] == 'series-program')
    {
        include 'pages/series-program.php';
    }
    elseif ($_GET['page'] == 'series')
    {
        $series = new Series($_POST);
        $message = $series->getResult();
        include 'pages/series-program.php';
    }
    elseif ($_GET['page'] == 'odd-even')
    {
        include 'pages/oddEven.php';
    }
    elseif ($_GET['page'] == 'odd-even-result')
    {
        $oddEven = new OddEven($_POST);
        $result = $oddEven->getOddEvenResult();

        include 'pages/oddEven.php';
    }
    elseif ($_GET['page'] == 'sum-of-series')
    {
        include 'pages/sumOfSeries.php';
    }
    elseif ($_GET['page'] == 'sum-of-series-result')
    {
        $series = new Serie($_POST);
        $result = $series->sumOfSeries();

        include 'pages/sumOfSeries.php';
    }

    elseif ($_GET['page'] == 'login')
    {
        include "pages/login.php";
    }
    elseif ($_GET['page'] == 'new-login')
    {
        $auth = new Auth($_POST);
        $auth->login();
    }
    elseif ($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }

}