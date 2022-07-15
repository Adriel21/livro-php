<?php
echo "<h2>Atribuição e incremento</h2>";
$var = 100; // atribuição simples
// $var += 5;  // Soma 5 em var
// $var -= 5; // Subtrai 5 em $var
// $var *= 5; // Multiplica $var por 5
// $var /= 5; // Divide $var por 5

print $var;
echo "<br>";
print $var++; //Pós-incremento, retorna $a e, então, incrementa $a em um - retorna 100 e incrementa para 101
echo "<br>";
print ++$var; // Pré-incremento, incrementa $a em um e, então, retorna $a - incrementa para 102 e retorna
echo "<br>";
print $var--; //Pós-decremento, retorna $a e, então, Decrementa $a em um  - retorna 102 e decrementa para 101
echo "<br>";
print --$var; //Pré-decremento, Decrementa $a em um, então, retorna $a - decrementa para 100 e retorna

