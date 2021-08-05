<?php   

$masyvas = array(1,2,3,4,5,6,7,8,9,10);

//Turim istrinti kazkuri elementa is masyvo


//Reikia istrinti skaiciu 5 ir skaiciu 10 is musu turimo masyvo

//Turime zinoti elemento vieta masyve
$elementuSkaiciusMasyve = count($masyvas);

unset($masyvas[4]);

var_dump($masyvas);
echo "<br>";


unset($masyvas[$elementuSkaiciusMasyve-1]);

var_dump($masyvas);
echo "<br>";



foreach($masyvas as $elementas) {
    echo $elementas;
    echo "<br>";

}

//I for reikia atkurti numeracija masyvo
// array_values ta padaro

$masyvas=array_values($masyvas);
echo "<br>";
var_dump($masyvas);
echo "<br>";
echo "<br>";

for($i=0; $i<count($masyvas); $i++) {
    echo $masyvas[$i];
    echo "<br>";
 
}


//Tokie pat veiksmai su asociatyviu masyvu

$asoc_masyvas = array(
    "elementas1" => "1",
    "elementas2" => "2",
    "elementas3" => "3",
    "elementas4" => "4",
    "elementas5" => "5",
    "elementas6" => "6",
);

//Istrinam paskutini elementa ir elementas4;
echo "Pries istrynima:";
var_dump($asoc_masyvas);
echo "<br>";

unset($asoc_masyvas["elementas4"], $asoc_masyvas["elementas6"]);

echo "Po istrynimo:";
var_dump($asoc_masyvas);
echo "<br>";


foreach($asoc_masyvas as $elementas) {

    echo $elementas;
    echo "<br>";

}

echo "<br>";

//Eelementu skaiciavimo sistema
$kitas_asoc_masyvas = array(
    "elementas10" => "1",
    "elementas11" => "2",
    "elementas12" => "3",
    "elementas13" => "4",
    "elementas14" => "5",
    "elementas15" => "6",
);

// $elementas10 = 10;
// echo $kitas_asoc_masyvas["elementas".$elementas10];
// echo "<br>";

for($i=10; $i<16; $i++) {
    echo $kitas_asoc_masyvas["elementas".$i];
    echo "<br>";

}

//Dvimatis masyvas
$dvimatismasyvas=array(
    array(1,2,3,4,5,6,7,8,9),
    array(1,2,3,4,5),
    array(987,654,321),
    array("987","654","321"),
    array(1,2,3,4,5,6,7,8,9),
    array(1,2,3,4,5),
    array(987,654,321),
    array("987","654","321"),


);

//Kaip istrinti visa lentynele?
//Kaip istrinti pavieni lenteles elementa?

//Norime istrinti paskutine masyvo lentynele
unset($dvimatismasyvas[7],$dvimatismasyvas[3]);
$dvimatismasyvas = array_values($dvimatismasyvas);
echo "<br>";

var_dump($dvimatismasyvas);
echo "<br>";
echo "<br>";

//kaip istrinti pavieni lentyneles elementa?

unset($dvimatismasyvas[4][4]);
echo print_r($dvimatismasyvas);
echo "<br>";

$dvimatismasyvas[4] = array_values($dvimatismasyvas[4]);

//Dvimatis masyvas. o jo elementai yra asoc masyvas



?>