<?php
$xmlNimi = 'opilased.xml';
$opilased = simplexml_load_file("XML/".$xmlNimi);

if (isset($_POST["submit"])) {
    $nimi = trim($_POST['nimi']);
    $perekonnanimi = trim($_POST['perekonnanimi']);
    $leht = trim($_POST['leht']);
    $vanus = trim($_POST['vanus']);
    $hobi = trim($_POST['hobi']);

    if (!empty($nimi) && !empty($perekonnanimi) && !empty($leht) && !empty($vanus) && !empty($hobi)) {
        $uusOpilane = $opilased->addChild('opilane');
        $uusOpilane -> addChild('nimi', $nimi);
        $uusOpilane -> addChild('perekonnanimi', $perekonnanimi);
        $uusOpilane -> addChild('leht', $leht);
        $uusOpilane -> addChild('vanus', $vanus);
        $uusOpilane -> addChild('hobi', $hobi);
        $opilased -> asXML("XML/".$xmlNimi);
    }
}
?>
<!DOCTYPE>
<html lang="et">
<head>
    <title>TARpv23 rühmaleht</title>
    <script>
function filterStudents() {
    var filter = document.getElementById('filter').value.toLowerCase();
    var opilased = document.querySelectorAll('.opilane');

    opilased.forEach(function(opilane) {
        var nimi = opilane.getAttribute('data-name').toLowerCase();
        if (!nimi.includes(filter)) {
            opilane.style.display = 'none';
        } else {
            opilane.style.display = '';
        }
    });
}
    </script>
</head>
<body>
<fieldset>
    <legend>
        <h2>Opilased
            <input type="text" id="filter" placeholder="Filter" oninput="filterStudents()">
        </h2>
    </legend>
    <?php
    for ($i = 0; $i < count($opilased); $i++) {
        $leht = $opilased -> opilane[$i] -> leht;
        $nimi = $opilased -> opilane[$i] -> nimi;
        $perekonnanimi = $opilased -> opilane[$i] -> perekonnanimi;
        $hobi = $opilased -> opilane[$i] -> hobi;
        $vanus = $opilased -> opilane[$i] -> vanus;
        $fullName = $nimi." ".$perekonnanimi;

        echo "<fieldset class='opilane' data-name='$fullName'>";
        echo "<legend><a href='$leht'>$fullName</a></legend>";
        echo "<table>";
        echo "<tr>";
        echo "<td>";
        echo "Vanus:";
        echo "</td>";
        echo "<td>";
        echo $vanus;
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "Hobi:";
        echo "</td>";
        echo "<td>";
        echo $hobi;
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</fieldset>";
    }
    ?>
</fieldset>
<fieldset>
    <legend><h2>Lisa uus õpilane</h2></legend>
    <form method="post" action="">
        <table>
            <tr>
                <td><label for="nimi">Opilanne nimi:</label></td>
                <td><input type="text" id="nimi" placeholder="Nimi" required></td>
            </tr>
            <tr>
                <td><label for="perekonnanimi">Opilanne perekonnanimi:</label></td>
                <td><input type="text" id="perekonnanimi" placeholder="Perekonnanimi" required></td>
            </tr>
            <tr>
                <td><label for="leht">Opilanne leht:</label></td>
                <td><input type="text" id="leht" placeholder="Leht" required></td>
            </tr>
            <tr>
                <td><label for="vanus">Opilanne vanus:</label></td>
                <td><input type="text" id="vanus" placeholder="Vanus" required></td>
            </tr>
            <tr>
                <td><label for="hobi">Opilanne hobi:</label></td>
                <td><input type="text" id="hobi" placeholder="Hobi" required></td>
            </tr>
            <tr>
                <td><input type="submit" id="lisaNupp" value="Lisa" required></td>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>