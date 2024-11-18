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
            <a href="?leht=proov.php">Tekstifunktsioonid</a>
        </li>
        <li>
            <a href="?leht=moistatus.php">Mõistatus</a>
        </li>
        <li>
            <a href="?leht=ajafunktsioonid.php">Ajafunktsioonid&nbsp;
                <img src="<?=showImage()?>" alt="hooaeg" style="height: 1rem; width: 1rem">
            </a>
        </li>
        <li>
            <a href="?leht=pildid.php">Pildid</a>
        </li>
        <li>
            <a href="?leht=massiivid.php">Massiivid</a>
        </li>
        <li>
            <a href="">XML</a>
            <ul class="dropdown">
                <li>
                    <a href="?leht=../XML/autodXML.php">XML Autod</a>
                </li>
                <li>
                    <a href="?leht=../XML/opilasedXML.php">XML Opilased</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>