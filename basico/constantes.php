<?php

define('NOME_PROGRAMADOR', 'Igor Gomes Araujo');

// NOME_PROGRAMADOR = 26; -> Uma vez declarada não pode ser alterada

define('IDADE_PROGRAMADOR', 26);

echo (NOME_PROGRAMADOR) . '<br>';
echo (IDADE_PROGRAMADOR) . '<br>';

// Outra forma de passar constantes

const CONTRATO_PROGRAMADOR = 'BRB - GlobalWeb Corp';

echo 'O Programador ' . (NOME_PROGRAMADOR) . ' tem ' . (IDADE_PROGRAMADOR) . ' anos de idade e trabalha no contrato ' . (CONTRATO_PROGRAMADOR);
