<?php

// Opdracht 1:

$tijd = date("H:i"); 

if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

// Opdracht 2:

function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}

$getalA = 10;
$getalB = 20;

berekenGemiddelde($getalA, $getalB);

// Opdracht 3:

function dagenTotEindeJaar() {
    $huidigeDatum = date_create(); 
    $eindeJaar = date_create(date('Y') . '-12-31'); 

    $verschil = date_diff($huidigeDatum, $eindeJaar); 

    $resterendeDagen = $verschil->format('%a'); 

    return $resterendeDagen;
}

$aantalDagen = dagenTotEindeJaar();
echo "Er zijn nog " . $aantalDagen . " dagen tot het einde van het jaar.";

// Opdracht 4:

function berekenTotaleLengte($strings) {
    $totaleLengte = 0;

    foreach ($strings as $string) {
        $totaleLengte += strlen($string);
    }

    return $totaleLengte;
}


$arrayMetStrings = ["tekst1", "tekst2", "tekst3"];
$resultaat = berekenTotaleLengte($arrayMetStrings);

echo "De totale lengte van de strings is: " . $resultaat;

?>

