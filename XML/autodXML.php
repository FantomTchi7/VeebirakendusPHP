<?php
$autod = simplexml_load_file("XML/autod.xml");
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Autode andmed xml failist</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Autode andmed xml failist</h1>
<fieldset>
    <legend><h2>Esimene auto andmed</h2></legend>
    <?php
    echo $autod->auto[0]->mark;
    echo ", ";
    echo $autod->auto[0]->numbrimark;
    echo ", ";
    echo $autod->auto[0]->omanik;
    echo ", ";
    echo $autod->auto[0]->aasta;
    ?>
</fieldset>
</body>
</html>