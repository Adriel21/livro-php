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

