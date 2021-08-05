<?php

$masyvas = array(0,1,2,3,4,5,6,7,8,9);

$k = 0;
for($i=0; $i<count($masyvas); $i++) {
    echo $masyvas[$i];
    echo "<br>";
    $k++;
}

echo "i reiksme po ciklo:".$i;   //Negalioja i reiksme, po ciklo i gali igauti atsitiktine reiksme
echo "k reiksme po ciklo:".$k;   ////Galioja, reiksme yra elementu skaicius masyve
$i = 0; //$indeksas = 0;
foreach($masyvas as $elementas) {
    echo $elementas;
    echo "<br>";
    $i++;
}

echo "i reiksme po foreach:".$i; //Galioja, reiksme yra elementu skaicius masyve



?>