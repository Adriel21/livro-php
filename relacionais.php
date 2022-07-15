<?php
echo "<h2>Operadores Relacionais</h2>";
echo "Exemplo utilizando o operador de igual == e diferente !=";
echo "<br>";
$a = 1234;
$b = '1234';

if ($a == $b) {
    echo '$a e $b são iguais';
}
else if ($a != $b) {
    echo '$a e $b são diferentes';
}

echo "<br>";
echo "Exemplo que compara as variáveis e tipo de dados com o operador de identico === e !==";
echo "<br>";
if ($a === $b) {
    echo '$a e $b são iguais';
}
else if ($a !== $b) {
    echo '$a e $b são diferentes';
}


echo "<hr>";
print 'PHP considera 0 como falso';
echo "<br>";
$e = 0;
//Testa se a variável é FALSE 
if ($e == false) {
    echo '$e é falso';
} 
echo "<br>";
// testa se a variável é um false e do tipo boolean
if ($e === false) {
    echo '$e é false e do tipo boolean';
}
echo "<br>";
// testa se é igual a zero e do mesmo tipo que zero
if ($e === 0) {
    echo '$e é zero mesmo';
}

