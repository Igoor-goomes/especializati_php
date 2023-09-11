<?php

// $nomes = ['Igor','EspecializaTI', 'PHP'];

$nome = 'Igor Gomes';
$curso = 'EspecializaTI';
$ano = 2023;
// método valido
$infoDados = [
    $nome,
    $curso,
    $ano,
];

// compact -> compactar as variaveis dentro de um unico array, como mostra o exemplo abaixo: 
// $infoDados = compact('nome', 'curso', 'ano');
// var_dump($infoDados);

// is_array -> Verifica se o valor é um array ou não, como mostra o exemplo abaixo:
// var_dump(is_array($nome)); // o seu retorno será bool(false) => não é um array
// echo '<br>';
// var_dump(is_array($infoDados)); // o seu retorno será bool(true) => trata-se de um array

// in_array -> Verifica se existe um valor dentro do array, como mostra o exemplo abaixo:
// var_dump(in_array('Igor Gomes', $infoDados)); // o seu retorno será bool(true) => existe um valor 'Igor Gomes' dentro do array $infoDados
var_dump(in_array('Lane Nunes', $infoDados)); // o seu retorno será bool(false) => não existe um valor 'Lane Nunes' dentro do array $infoDados
