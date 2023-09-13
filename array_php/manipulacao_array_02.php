<?php

$infoEmpresa = [
    'no_empresa'      => 'GlobalWeb',
    'no_colaborador'  => 'Igor Gomes de Brito',
    'dt_ano_admissao' => 2022,
];

// Exemplo array merge
$contratoEmpresa = [
    'no_contrato'  => 'BRB - Fabrica de Software',
    'no_equipe'    => 'PHP Agíl',
    'dt_renovacao' => 'Novembro - 2023',
];

// var_dump($infoEmpresa['no_empresa']);

// Array keys - Recupera as chaves do array
// var_dump(array_keys($infoEmpresa));

// Array values - Recupera os valores do array
// var_dump(array_values($infoEmpresa));

// Array count - Recupera a quantidade de registro dentro de um array
// var_dump(count($infoEmpresa));

// Array merge - Faz a união de dois arrys 

$contrato = array_merge($infoEmpresa, $contratoEmpresa);
echo '<pre>';
var_dump($contrato);