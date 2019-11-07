<?php
echo "Van welk getal wil je de faculteit weten?\n";
$getal = readline();
$antwoord = 1;

$i = 1;
while ( $i <= $getal):
    $antwoord = $i * $antwoord;
    $i++;
endwhile;

echo "De faculteit van $getal is $antwoord";
?>