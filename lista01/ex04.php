<?php
$vetor1 = array();
$vetor2 = array();
$vetor_soma = array();
for ($i = 0; $i < 10; $i++) {
    $vetor1[$i] = rand(1, 100);
    $vetor2[$i] = rand(1, 100);
}

for ($i = 0; $i < 10; $i++) {
    $vetor_soma[$i] = $vetor1[$i] + $vetor2[$i];
}

echo "Vetor 1: ";
foreach ($vetor1 as $valor) {
    echo "$valor ";
}
echo "<br>";

echo "Vetor 2: ";
foreach ($vetor2 as $valor) {
    echo "$valor ";
}
echo "<br>";
echo "Vetor Soma: ";
foreach ($vetor_soma as $valor) {
    echo "$valor ";
}
?>
