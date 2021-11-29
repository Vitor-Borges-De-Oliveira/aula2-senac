<?php

/*
if - else
se - senao
sintaxe?
if (condition) {
    [statements true]
}
else {
    [statementes false]
}
*/

$idade = 8;
if ($idade>=18){
    echo "Maior de idade";
}

else {
    echo "Menor de idade"; 
}

echo "<hr>";

/* se o sal <5000 inss --9%
senao inss - 11%*/

$func = "Vitor";
$sal = 3000;

if ($sal<5000) {
    echo "inss 9%<br>";
    $inss = $sal * (9/100);
    $salLiq = $sal - $inss;
    echo "O valor do inss é de: {$inss}<br>";
    echo "Salário Líquido: {$salLiq}";    
}

else {
    echo "inss 11%<br>";
    $inss = $sal * (11/100);
    $salLiq = $sal - $inss;
    echo "O valor do inss é de: {$inss}<br>";
    echo "Salário Líquido: {$salLiq}";
}