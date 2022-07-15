<?php
echo "<h2>Estrutura de funções</h2>";
function calcula_imc($peso, $altura){
    return $peso / ($altura * $altura);
}
echo calcula_imc(75, 1.85);
echo "<hr>";
echo "<h2>Variáveis globais</h2>";
// Para usarmos variáveis globais numa função sem passá-la como parâmetro, precisamos declarar como global dentro da função. Porém, utilizar variáveis globais não é considerado boa prática de programação
$total = 0;
function km2mi($quilometros) {
    global $total;
    $total += $quilometros;
    return $quilometros * 0.6;
}

echo 'percorreu ' . km2mi(100) . " milhas <br>\n";
echo 'percorreu ' . km2mi(200) . " milhas <br>\n";
echo 'percorreu ' . $total . " quilometros <br>\n";

echo "<hr>";
echo "<h2>Variáveis estáticas</h2>";
// podemos armazenar variáveis estáticas no escopo da função. Elas mantém o valor da última execução.
function percorre($quilometros) {
    static $total;
    $total += $quilometros; 
    echo 'percorreu mais '. $quilometros . ' do total de ' . $total . '<br>';
}
percorre(100);
percorre(200);
percorre(50);
