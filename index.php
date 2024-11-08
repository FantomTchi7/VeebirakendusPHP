<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP tunnitööd</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<div>
    <?php
        include("nav.php");
    ?>
</div>
</header>
<h1>PHP tunnitööd</h1>
<section>
    <?php
    if (isset($_GET["leht"])) {
        include("content/".$_GET["leht"]);
    } else {
        include("content/kodu.php");
    }
    ?>
</section>
    <?php
        include("footer.php");
    ?>
</body>
</html>