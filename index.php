<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP tunnitööd</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="php-code">
    <?php
        include("nav.php");
    ?>
</header>
<section class="php-code">
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
<script>
    function updateBodyPadding() {
        const navHeight = document.querySelector('nav').offsetHeight;
        document.body.style.paddingTop = `calc(${navHeight}px - 2.25rem)`;
    }

    window.addEventListener('resize', updateBodyPadding);
    window.addEventListener('load', updateBodyPadding);
</script>
</html>