<?php
echo "<h2>Tipagem de dados</h2>";
$e = 5;
$f = 'teste';
var_dump($e, $f);
//  No php, o tipo das variáveis é identificado automaticamente. Porém, é boa prática indicar o tipo da variável dentro de funções
var_dump('teste' . 5);
var_dump('5' + '10'); 

function calcula_imc(float $peso, float $altura) {
    var_dump($peso, $altura);
    return $peso / ($altura*$altura);
}

var_dump(calcula_imc('75.1',2)); //Nesse caso, mesmo tendo passado o valor como string, por conta da declaração de tipo a linguagem garante que será um float. Porém, a conversão não funciona em todos os tipos. 
echo "<br>";
// var_dump(calcula_imc('75.1x',2));  -- como neste caso

function calcula_imcDois(float $peso, float $altura): int {
    var_dump($peso, $altura);
    return $peso / ($altura*$altura);
}
// Podemos, além de declarar o tipo do parâmetro, indicar o dado que irá ser tido como resultado. Nessa função, esperáva-se um dado do tipo float, porém, forçamos uma saída de um inteiro. A conversão não funciona se indicarmos a saída como array e internamente for float
var_dump(calcula_imcDois(75, 1.85));
