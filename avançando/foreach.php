<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinícius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes[] = [
    'titular' => 'Cláudia',
    'saldo' => 2000
];

$contasCorrentes[] = [
    'titular' => 'Cláudia 2',
    'saldo' => 2002
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " - ";
    echo $conta['titular'] . PHP_EOL;
}
