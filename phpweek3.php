<?php
//deel 1 code 
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];

foreach ($myArray as $waarde) {
    echo $waarde . "<br>";
}


//deel 2 code 
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];

$aantalElementen = count($myArray);

echo "1. Het array heeft " . $aantalElementen . " elementen.";

$myArray[] = 'motor';

$aantalElementen = count($myArray);

echo "<br>1. Het array heeft " . $aantalElementen . " elementen.";


/* deel 3 code

$array = array("foo","bar","hello", "world");
echo $array[1];
$array = array(1,2,3,4,5);
echo$array[3];
$cars = array("Volvo","BMW", "Toyota");
echo $array[2];
echo count($cars);
$array = [ 5, 4, 3, 2, 1 ];
echo $array[e];
Snumbers[0]="one";
Snumbers[1]="two";
Snumbers[2]="three";
Snumbers[3]="four";
Snumbers[4]-"five";
echo Snumbers[count(śnumbers)-1];                  

Bepaal wat er wordt afgedrukt op regel 2, regel 5 , regel 8, regel 9, regel 12 en regel 19.
Schrijf de 6 antwoorden op.

--------------------------------------------------------------------------------------------------------------------------------------------------------------------
hier beneden zie je de juiste code:

Regel 2: Het zal "bar" afdrukken.

Regel 5: Dit zal een fout genereren omdat "echo$array[3]" niet correct is geschreven. Het moet zijn "echo $array[3];" zonder de samengevoegde vorm.

Regel 8: Dit zal een fout genereren omdat "$array" wordt hergebruikt zonder opnieuw gedefinieerd te zijn. Het moet zijn "echo $cars[2];" om "Toyota" af te drukken.

Regel 9: Het zal het aantal elementen in de array "$cars" afdrukken, wat 3 is.

Regel 12: Dit zal een fout genereren omdat "e" geen geldige index is voor de array "$array". Het moet zijn "echo $array[4];" om "1" af te drukken.

Regel 19: Dit zal een fout genereren omdat "Snumbers" geen geldige array is. Het moet zijn "echo $Snumbers[count($Snumbers)-1];" om "four" af te drukken.
*/


// deel 4 code

$cijfersPHP = [4.4, 4.6, 8.6, 6.1, 7.6, 7.2];
$gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP), 1);
echo "Gemiddelde is: " . $gemiddelde;

/*Ik denk dat het beter is om de regels samen te voegen, omdat het de code leesbaarder maakt en de intentie duidelijker maakt. Door de regels samen te voegen, wordt het duidelijk dat het doel is om het gemiddelde te berekenen en af te ronden. Bovendien vermindert het de hoeveelheid herhaling in de code en maakt het gebruik van een tijdelijke variabele overbodig.

Het combineren van regels maakt de code ook minder foutgevoelig, omdat er minder ruimte is voor fouten bij het gebruik van variabelen. Er is minder kans op het per ongeluk hergebruiken van dezelfde variabele of het verkeerd bijwerken van de variabelen.

Daarom is mijn voorkeur om de regels samen te voegen.
*/

?>