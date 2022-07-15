<?php
echo "<h2>Estrutura de repetição</h2>";
echo "<h3>Loop while</h3>";
$a = 1;
while ($a < 5) {
    print $a;
    $a ++;
}
echo '<hr>';
echo "<h3>Loop for</h3>";

for ($i = 1; $i <= 10; $i++) {
    print $i;
}

echo '<hr>';
echo "<h3>Loop foreach</h3>";
$frutas = array("maçã", "laranja", "pera", "banana");
foreach ($frutas as $fruta) {
    print "$fruta -";
}