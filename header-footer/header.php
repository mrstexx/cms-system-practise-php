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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
          crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="index.php">Admin Panel</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item" style="color: white">
            <?php
            $dateNow = new DateTime();
            $dateNow->setTimezone(new DateTimeZone('Europe/Vienna'));
            echo $dateNow->format('d.m.Y');
            ?>
        </li>
    </ul>
</nav>
