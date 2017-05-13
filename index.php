<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php
    require_once "functions/functions.php";
    $title = "Новости обо всем";
    require_once "blocks/head.php";
    ?>
    <script src="js/jquery.js"></script>
    <script src="js/slideshow.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div class="slider">
        <ul>
            <li><img src="img/slider/1.jpg" alt="" /></li>
            <li><img src="img/slider/2.jpg" alt="" /></li>
        </ul>
    </div>
    <div id="wrapper">
        <div id="leftCol">
        </div>
    </div>
<?php require_once "blocks/footer.php"?>

</body>
</html>