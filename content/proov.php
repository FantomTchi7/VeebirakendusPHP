<?php
echo "<h1>Tekstifunktsioonid</h1>";
echo "<fieldset>";
echo "Tere hommikust!";
echo "<br>";
$muutuja = "PHP on skriptikeel.";
echo "<strong>";
echo $muutuja;
echo "</strong>";
echo "<br>";
// Tekstifunktsioonid
echo "Tekstifunktsioonid";
$tekst = "Esmaspäev on 4. november";
echo "<br>";
// Kõik tähed on suured
echo mb_strtoupper($tekst);
echo "<br>";
// Kõik tähed on väiksed
echo mb_strtolower($tekst);
echo "<br>";
echo "Teksti pikkus - ".strlen($tekst);
echo "<br>";
// Eraldame esimesed 5 tähte
echo "Esimesed 5 tähte - ".substr($tekst, 5, 5);
echo "<br>";
// Leiame on positsiooni
$otsing = "on";
echo "On asukoht lauses on ".strpos($tekst, $otsing);
echo "<br>";
// Eralda esimene sõna
$otsing = "Esmaspäev";
echo substr($tekst, strpos($tekst, $otsing), strlen($otsing) + 1);
echo "</fieldset>";
echo "<fieldset>";
echo "<legend><h2>Kasutame veebis kasutavaid näidised</h2></legend>";

// Teksti pikkus
echo $tekst = 'Teksti pikkus näitus';
echo '<br>';
echo "Teksti pikkus - ".strlen($tekst);
echo '<br>';
echo "Sõnade arv lauses - ".str_word_count($tekst);

// Teksti kärpimine
$tekst = ' 	Näitus tekst, lorem ipsum   ';
echo "<pre>$tekst</pre>";
echo "<pre>".trim($tekst)."</pre>";
echo "<pre>".ltrim($tekst)."</pre>";
echo "<pre>".rtrim($tekst)."</pre>";
/*
  	Näitus tekst, lorem ipsum  ㅤ
Näitus tekst, lorem ipsum
Näitus tekst, lorem ipsum  ㅤ
 	Näitus tekst, lorem ipsum
*/

// Tekst kui massiiv
echo $tekst = 'Näitus tekst, lorem ipsum ad mortem inimicus';
echo '<br>';
echo "Esimene täht - ".$tekst[0];
echo '<br>';
echo "Neljas täht - ".$tekst[4]; // ä on kaks tähed
echo '<br>';
echo "Kolmas sõna - ".str_word_count($tekst,1)[3];
echo "</fieldset>";