<h2>Ajafunktsioonid</h2>
<div id='kuupaev'>
    <?php
    echo "Täna on "."<strong>".date("d.m.Y")."</strong><br>";
    date_default_timezone_set("Europe/Tallinn");
    echo "Tänane Tallinna kuupäev ja kellaaeg on ".
        "<strong>".date("d.m.Y G:i", time())."</strong><br>";
    echo "<strong>"."d"."</strong>"." - kuupäev 1-31";
    echo "<br>";
    echo "<strong>"."m"."</strong>"." - kuu numbrina 1-12";
    echo "<br>";
    echo "<strong>"."Y"."</strong>"." - aasta neljakohane";
    echo "<br>";
    echo "<strong>"."G"."</strong>"." - tunniformat 0-23";
    echo "<br>";
    echo "<strong>"."i"."</strong>"." - minutid 0-59";
    echo "<br>";
    ?>
    <img src="<?=showImage()?>" alt="hooaeg" style="height: 4rem; width: 4rem; background-color: black">
</div>
<div id="koolivaheaeg">
    <h2>Mitu päeva on koolivaheajani 23.12.2024</h2>
    <?php
    $kdate = date_create_from_format('d.m.Y', '23.12.2024');
    $date = date_create();
    $diff = date_diff($kdate, $date);
    // echo "Jääb ".$diff->format("%a")." päeva";
    // echo "<br>";
    echo "Jääb <strong>".$diff->days."</strong> päeva";
    ?>
</div>
<div id="sunnipaev">
    <h2>Mitu päeva on sünnipäevani 25.02.2025</h2>
    <?php
    $kdate = date_create_from_format('d.m.Y', '25.02.2025');
    $date = date_create();
    $diff = date_diff($kdate, $date);
    echo "Jääb <strong>".$diff->days."</strong> päeva";
    ?>
</div>
<div id="vanus">
    <h2>Kasutaja vanuse leidmine</h2>
    <form method="post" action="">
        Sisesta oma sünnipäev<br>
        <input type="date" name="sunnipaev" placeholder="dd.mm.yyyy">
        <input type="submit" value="Sisesta">
    </form>
    <?php
    if (isset($_POST["sunnipaev"]))
    {
        if (empty($_POST["sunnipaev"]))
        {
            echo "Sisesta oma sünnipäev";
        } else
        {
            $kdate = date_create($_POST["sunnipaev"]);
            $date = date_create();
            $diff = date_diff($kdate, $date);
            echo "Sa oled <strong>".$diff->format("%y")."</strong> aastat vana";
        }
    }
    ?>
</div>
<div>
    <h2>Massivi abil näidata kuu nimega.</h2>
    <form method="post" action="">
        Sisesta kuu<br>
        <select name="kuu">
            <option value="january">Jaanuar</option>
            <option value="february">Veebruar</option>
            <option value="march">Märts</option>
            <option value="april">Aprill</option>
            <option value="may">Mai</option>
            <option value="june">Juuni</option>
            <option value="july">Juuli</option>
            <option value="august">August</option>
            <option value="september">September</option>
            <option value="october">Oktoober</option>
            <option value="november">November</option>
            <option value="december">Detsember</option>
        </select>
        <input type="submit" value="Sisesta">
    </form>
    <?php
    $kuud = array(
        "january",
        "february",
        "march",
        "april",
        "may",
        "june",
        "july",
        "august",
        "september",
        "october",
        "november",
        "december"
    );
    if (isset($_POST["kuu"]))
    {
        if (empty($_POST["kuu"]))
        {
            echo "Sisesta kuu";
        } else
        {
            $kdate = date_create($_POST["kuu"]);
            echo "<strong>";
            echo $kdate->format("m.F.Y");
            echo "</strong>";
        }
    }
    ?>
</div>