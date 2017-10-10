<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 10/8/2017
 * Time: 11:30 PM
 */
?>

<?php
include 'header-footer-data/data.php';

$pageTitle = "Musics";
$section = "music";
$sideSection = "products";

if (isset($_GET["cat"])) {
    if ($_GET["cat"] == "musics") {
        $pageTitle = "Musics";
        $section = "music";
    } else if ($_GET["cat"] == "books") {
        $pageTitle = "Books";
        $section = "books";
    } else if ($_GET["cat"] == "movies") {
        $pageTitle = "Movies";
        $section = "movies";
    }
}

include 'header-footer-data/header.php';

?>

<!-- CONTENT -->

<h2 class="text-center" id="productsTitle">Products</h2>

<ul class="nav nav-pills nav-fill" id="productsNav">
    <li class="nav-item">
        <a class="nav-link <?php if ($section == "music") echo "active"; ?>" href="products.php?cat=musics">Musics</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($section == "books") echo "active"; ?>" href="products.php?cat=books">Books</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($section == "movies") echo "active"; ?>" href="products.php?cat=movies">Movies</a>
    </li>
</ul>

<?php

if ($section == "music") {
    //include 'product-pages/musics.php';
    $section = "music";
} else if ($section == "books") {
    //include 'product-pages/books.php';
    $section = "books";
} else if ($section == "movies") {
    //include "product-pages/movies.php";
    $section = "movies";
}
?>

<h3 class="productTitle text-center">List of all <?php echo $pageTitle ?></h3>

<div class="row">
    <?php
    foreach ($catalog as $id => $item) {
        if (strtolower($section) == strtolower($item["category"])) {
            ?>
            <div class="col-md-3 card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $item["title"] ?></h5>
                        <img src="<?php echo $item["img"] ?>"
                             class="img-thumbnail" alt="">
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-block">View details</a>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>


<?php include 'header-footer-data/footer.php' ?>
