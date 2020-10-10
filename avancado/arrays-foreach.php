<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


// Adicionando uma nova conta ao array de contas
$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

echo PHP_EOL;
echo PHP_EOL;

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . " seu saldo é de " . $conta['saldo'] . PHP_EOL;
}


echo PHP_EOL;
echo PHP_EOL;


$idadeList = [23, 19, 25, 30, 41, 18, 21, 35];

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}