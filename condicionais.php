<?php 
echo "<h2>Condicional com if e else</h2>";
$a = 1;

if ($a == 5) {
    echo "é igual";
} else {
    echo "não é igual";
}

//Quando não explicitamos o operador lógico por meio do if, o comportamento padrão do php é retorna true sempre que a variável tiver conteúdo válido
echo "<hr>";
$b = 'conteudo';

if ($b) {
    echo '$a tem conteúdo';
}

echo "<hr>";

echo "<h2>Testes encadeados</h2>";

$salario = 1020;
$tempo_servico = 12;
$tem_reclamacoes = false;
if ($salario > 100) {
    if ($tempo_servico >= 12) {
        if ($tem_reclamacoes != true) {
            echo 'parabés, você foi promovido<br>' . PHP_EOL;
        }
    }
}


echo "<hr>";
// Utilizando if para atribuir variável
$valor_venda = 15;

if ($valor_venda > 100) {
    $resultado = 'muito caro';
}
else {
    $resultado = 'pode comprar';
}

echo $resultado;

echo "<hr>";
echo "<h2>switch</h2>";
$i = 1;
echo "<h3>Usando if</h3>";
if ($i == 0) {
    print "i é igual a 0";
}
else if ($i == 1) {
    print 'é igual a 1';
}
else if ($i == 2) {
    print 'é igual a 2';
}
else {
    print 'i não é igual a 0, 1 ou 2';
}
;
echo "<hr>";
echo "<h3>Usando switch</h3>";
switch ($i) {
    case 0:
        print 'i é igual a 0';
        break;
    case 1: 
        print 'i é igual a 1';
        break;
    case 2: 
        print 'i é igual a 2';
        break;
    default:
        print 'i não é igual a 0, 1 ou 2';       
} 