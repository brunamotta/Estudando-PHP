<?php

$array =[ //chaves só podem ser int ou string
    1 =>'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'teste'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}