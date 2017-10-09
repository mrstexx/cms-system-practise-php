<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 10/7/2017
 * Time: 11:07 PM
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $pageTitle ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
          crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.scss">
    <link rel="stylesheet" href="style/style_header.scss">
    <script src="https://use.fontawesome.com/f3004fe298.js"></script>
</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="index.php">Admin Panel</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item" style="color: white">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <?php
            $dateNow = new DateTime();
            $dateNow->setTimezone(new DateTimeZone('Europe/Vienna'));
            echo $dateNow->format('d.m.Y');
            ?>
        </li>
    </ul>
</nav>

<!--SIDEBAR-->

<div class="container-fluid" style="height: 100%">
    <div class="row" style="height: 100%">
        <!--        LEFT SIDE-->
        <div class="col-md-2" id="left-side">
            <div class="list-group">
                <a href="users.php" class="list-group-item <?php if ($sideSection == "users") echo "active"; ?>"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                <a href="products.php" class="list-group-item <?php if ($sideSection == "products") echo "active"; ?>"><i class="fa fa-list" aria-hidden="true"></i> Products</a>
                <a href="statistics.php" class="list-group-item <?php if ($sideSection == "statistics") echo "active"; ?>"><i class="fa fa-info-circle" aria-hidden="true"></i> Statistics</a>
                <a href="contact.php" class="list-group-item <?php if ($sideSection == "contact") echo "active"; ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
            </div>
        </div>
        <!--        RIGHT SIDE-->
        <div class="col" id="right-side">

