<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 10/8/2017
 * Time: 11:30 PM
 */
?>

<?php
$pageTitle = "Musics";
$section = "musics";
$sideSection = "products";

if (isset($_GET["cat"])) {
    if ($_GET["cat"] == "musics") {
        $pageTitle = "Musics";
        $section = "musics";
    } else if ($_GET["cat"] == "books") {
        $pageTitle = "Books";
        $section = "books";
    } else if ($_GET["cat"] == "movies") {
        $pageTitle = "Movies";
        $section = "movies";
    }
}

include 'header-footer/header.php';

?>

<!-- CONTENT -->

<h2 class="text-center" id="productsTitle">Products</h2>

<ul class="nav nav-pills nav-fill" id="productsNav">
    <li class="nav-item">
        <a class="nav-link <?php if ($section == "musics") echo "active"; ?>" href="products.php?cat=musics">Musics</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($section == "books") echo "active"; ?>" href="products.php?cat=books">Books</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($section == "movies") echo "active"; ?>" href="products.php?cat=movies">Movies</a>
    </li>
</ul>

<?php

if ($section == "musics") {
    include 'product-pages/musics.php';
} else if ($section == "books") {
    include 'product-pages/books.php';
} else if ($section == "movies") {
    include "product-pages/movies.php";
}

?>


<?php include 'header-footer/footer.php' ?>
