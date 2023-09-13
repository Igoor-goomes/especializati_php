<?php

$carrinho = [
    'Arroz',
    'Feijão',
    'Carne',
    'Sorvete',
];

var_dump($carrinho);
echo '<br>';
// Array pop -> remove o ultimo elemento do array
array_pop($carrinho); // removendo o elemento "Sorvete" do nosso array
var_dump($carrinho);
echo '<br>';

// Array shift -> remove o primeiro elemento do array
array_shift($carrinho); // removendo o elemento "Arroz" do nosso array
var_dump($carrinho);
echo '<br>';

// Array  usset -> remove uma array completo ou uma variavel e também um elemento, passando o indice dentro []
unset($carrinho[0]);
var_dump($carrinho);
echo '<br>';

// Array push -> adiciona um elemento ao final do array
array_push($carrinho, 'Sabão');
var_dump($carrinho);
echo '<br>';

// Array unshift -> adiciona um elemento ao final do array
array_unshift($carrinho, 'Macarrão');
var_dump($carrinho);
echo '<br>';

// Array unique -> remove um elemento duplicado do array
array_unshift($carrinho, 'Sabão');
var_dump($carrinho);
echo '<br>';

$carrinho = array_unique($carrinho);
var_dump($carrinho);
