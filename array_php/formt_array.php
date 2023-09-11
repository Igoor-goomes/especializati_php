<?php
// Podemos definir array como uma variavel que recebe um conjunto de variaveis, podendo armazenar qualquer tipo de valor
// para simplificar podemos entender array como um armário para armazenar objetos

// $carro = array(); -> forma mais simples e não tão comum

// $carro = [1, 'Argo', '20/20']; // forma mais comum encontrata nas versões mais recentes do PHP
// var_dump($carro); // retorna -> array(3) { [0]=> int(1) [1]=> string(4) "Argo" [2]=> string(5) "20/20" }
// var_dump($carro[1]);

// $carros = [
//     'Argo',    // posição -> 0
//     'Fusion',  // posição -> 1
//     'Civic',   // posição -> 2
//     'Ranger',  // posição -> 3
// ];

// var_dump($carros[3]);


// Array - Composto
/*
$meuCarro = [
    //'indice'    => 'valor'
    'no_marca'  => 'Fiat',
    'no_modelo' => 'Argo',
    'no_cor'    => 'Vermelho',
    'qt_porta'  => 5,
    'dt_ano'    => '2020/2020',
];
adicinar indice e valor ao nosso carro
$meuCarro['airbag'] = true;
$meuCarro['som'] = 'Uconnect';

trocando valor de um indice
$meuCarro['no_cor'] = 'Patra';
$meuCarro['no_modelo'] = 'Pulse';

echo $meuCarro['no_modelo'] . '<br>';
*/

// Array - Multi-dimencionais

$colaboradores = [
    'gerente_equipe' => [
        'no_nome'      => 'Sidney Fernando',
        'cpf'          => 67246365150,
        'nr_matricula' => 'u672463',
        'nr_et'        => '34016001',
    ],
    'analista_requisito' => [
        'no_nome'      => 'Liliam Cristina',
        'cpf'          => 24444882107,
        'nr_matricula' => 'u244448',
        'nr_et'        => '34016002',
    ],
    'analista_sistema_jr' => [
        'no_nome'      => 'Igor Gomes',
        'cpf'          => 36501168120,
        'nr_matricula' => 'u365011',
        'nr_et'        => '34016003',
    ],
    'analista_sistema_pl' => [
        'no_nome'      => 'William Vieira',
        'cpf'          => 30216530148,
        'nr_matricula' => 'u302165',
        'nr_et'        => '34016004',
    ],
    'analista_sistema_sr' => [
        'no_nome'      => 'Marcio Miranda',
        'cpf'          => 73499108194,
        'nr_matricula' => 'u734991',
        'nr_et'        => '34016005',
    ],
];

echo $colaboradores['analista_sistema_jr']['no_nome'];
