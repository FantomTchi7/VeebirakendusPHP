<?php
echo "<h1>Mõistatus</h1>";
echo "Euroopa riik<br>";
$riik = "Saksamaa";
$pikkus = strlen($riik);
$kasutatudI = [];

while (count($kasutatudI) < 5) {
    $rand = random_int(0, $pikkus - 1);
    if (!in_array($rand, $kasutatudI)) {
        $kasutatudI[] = $rand;
        echo ($rand + 1)." täht on ".$riik[$rand];
        echo "<br>";
    }
}

if (isset($_POST["riikSisesta"])) {
    if (empty($_POST["riikSisesta"])) {
        echo "Sisesta riik";
    } else {
        $riikSisestanud = $_POST["riikSisesta"];
        if (strtolower($riik) === strtolower($riikSisestanud)) {
            echo "Tubli!";
        } else {
            echo "Vale.";
        }
    }
}
?>
<form method="post" action="">
    <input type="text" name="riikSisesta" placeholder="Sisesta riik">
    <input type="submit" value="Sisesta">
</form>
<?php
echo "<br>";
echo "<br>";
highlight_file("moistatus.php");