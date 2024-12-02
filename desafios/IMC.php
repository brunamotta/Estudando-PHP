<?php

$peso = 82;
$altura = 1.71;
$imc = $peso / $altura**2;

echo "seu IMC é $imc." .PHP_EOL;

if ($imc < 18.4) {
    echo "Você está com subpeso.";
} elseif ($imc < 24.9) {
    echo "Você está no seu peso ideal. :)";
} elseif ($imc < 29.9) {
    echo "Você está com sobrepeso";
} elseif ($imc < 34.9){
    echo "Você tem obesidade grau 1.";
} elseif ($imc < 39.9){
    echo "Você tem obesidade grau 2.";
} else {
    echo "Você tem obesidade grau 3.";
}

/* EXEMPLO DO PROFESSOR:

<?php

$peso = 60;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";*/
