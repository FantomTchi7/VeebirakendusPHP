<?php
echo "Mõistatus: Euroopa riik<br>";
$riik = "Saksamaa";
$pikkus = strlen($riik);
$kasutatudI = [];

while (count($kasutatudI) < 4) {
    $rand = random_int(0, $pikkus - 1);
    if (!in_array($rand, $kasutatudI)) {
        $kasutatudI[] = $rand;
        echo ($rand + 1)." täht on ".$riik[$rand];
        echo "<br>";
    }
}
?>