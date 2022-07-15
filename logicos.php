<?php 
echo "<h2>Operadores lógicos</h2>";
$vai_chover = true;
$esta_frio = true;
if ($vai_chover and $esta_frio) {
    echo 'Não vou sair de casa';
}
echo "<br>";

$vai_choverr = false;
$esta_frioo = true;

if ($vai_choverr xor $esta_frioo) {
    echo 'Vou pensar duas vezes antes de sair de casa';
}

echo "<p>O uso dos operadores lógicos com && e || possuem maior importância que and e or</p>";

