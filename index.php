<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP tunnitööd</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<div class="php-code">
    <?php
        include("nav.php");
    ?>
</div>
</header>
<h1>PHP tunnitööd</h1>
<section>
<div class="php-code">
    <?php
    if (isset($_GET["leht"])) {
        include("content/".$_GET["leht"]);
    } else {
        echo "Tere tulemast!";
    }
    ?>
</div>
</section>
<footer>
<div class="php-code">
<?php
    echo "Vladislav Kudriašev &copy ";
    echo date('Y/m/d');
?>
</div>
</footer>
</body>
</html>