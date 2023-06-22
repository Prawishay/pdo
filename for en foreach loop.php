<?php

// Opdracht 1:  

for ($i = 0; $i <= 50; $i++) {
    echo $i . " ";
}

// Opdracht 2:

$klasgenoten = array(
    "Jan",
    "Piet",
    "Klaas",
    "Marie",
    "Sara",
    "Tom",
    "Lena",
    "Emma",
    "Lucas",
    "Lisa"
);

foreach ($klasgenoten as $naam) {
    echo $naam . "<br>";
}

// Opdracht 3: 

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

$aantalMaanden = count($maanden);

for ($i = 0; $i < $aantalMaanden; $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
}

// Opdracht 4:

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

$i = 1;

foreach ($maanden as $maand) {
    echo 'Maand ' . $i . ' is ' . $maand . '.<br />';
    $i++;
}

?>







