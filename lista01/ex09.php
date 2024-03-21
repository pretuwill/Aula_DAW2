<?php

$vetor = array_map(fn() => rand(1, 50), range(1, 50));


echo "Vetor antes da divisão: " . implode(", ", $vetor) . "\n";

$maior_valor = max($vetor);

$vetor = array_map(fn($x) => $x / $maior_valor, $vetor);

echo "Vetor após a divisão: " . implode(", ", $vetor) . "\n";

?>