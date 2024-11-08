<?php
function showImage() {
    $today = new DateTime();
    $spring = new DateTime('March 20');
    $summer = new DateTime('June 21');
    $fall = new DateTime('September 22');
    $winter = new DateTime('December 21');

    if ($today >= $spring && $today < $summer) {
        $imgSrc = "/content/img/spring.svg";
    } elseif ($today >= $summer && $today < $fall) {
        $imgSrc = "/content/img/summer.svg";
    } elseif ($today >= $fall && $today < $winter) {
        $imgSrc = "/content/img/fall.svg";
    } elseif ($today >= $winter && $today < $spring) {
        $imgSrc = "/content/img/winter.svg";
    } else {
        $imgSrc = "";
    }

    return $imgSrc;
}
?>
<nav>
    <ul>
        <li>
            <a href="?leht=kodu.php">Kodu</a>
        </li>
        <li>
            <a href="?leht=proov.php">Leht</a>
        </li>
        <li>
            <a href="?leht=moistatus.php">Mõistatus</a>
        </li>
        <li>
            <a href="?leht=ajafunktsioonid.php">Ajafunktsioonid&nbsp;
                <img src="<?=showImage()?>" alt="hooaeg" style="height: 1rem; width: 1rem; vertical-align: middle">
            </a>
        </li>
    </ul>
</nav>