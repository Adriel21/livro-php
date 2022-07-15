<?php
// phpinfo(); comando que serve para vermos as especificações do php instalado
print 'alo'; //Print é um comando que imprime uma string

// $a = 5;
// $b = $a;
// $b = 10;
// Quando criamos uma variável, ela recebe um espaço especial de armazenamento na memória. Exceto em caso de objetos
// echo $a;
// echo "<br>";
// echo $b;

$a = 5;
$b = &$a;
$b = 10;
// Quandos usamos & na frente da variável que está sendo atribuída a outra $b, fazemos com  que ambas apontem para o mesmo espaço na memória. Dessa forma, o valor que um receber será o de outro também
echo $a;
echo "<br>";
echo $b;

echo "<hr>";

echo "<h2>Tipo booleano</h2>";
$exibir_nome = true; //Declara a variável com valor true
//Testando se exbir_nome é true
if ($exibir_nome) {
    echo "José da Silva";
}

echo "<hr>";

$umidade = 91; //Declara variável numérica

//Testa se é maior que 90. Retorna um booleano
$vai_chover = ($umidade > 90); //true porque umidade é maior que 90

//  testa se vai chover é vedadeiro
if ($vai_chover) {
    echo "Vai chover";
}

// Tamvém são considerados como valores falsos em comparações booleanas 
// inteiro 0 - ponto flutuante 0.0 - string vazia " " ou "0" - array vazio - objeto sem elemento e tipo null
echo "<hr>";


echo "<hr>";

echo "<h2>Constantes</h2>";
define ('MAXIMO_CLIENTES', 100);
// As constantes em php são definidas como define ('MAIUSCULO', VALOR A SER RECEBIDO);
echo MAXIMO_CLIENTES;

echo "<hr>";







