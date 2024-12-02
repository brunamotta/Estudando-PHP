<?php

$idadeList = [21, 23, 19, 21, 30, 25];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[] = 20;

unset($idadeList[4]);

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}