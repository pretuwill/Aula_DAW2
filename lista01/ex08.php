<?php
$vetor = array_map(fn() => rand(1, 50), range(1, 50));

echo "Vetor antes da divisão: \n" . implode(", \n", $vetor) . "\n";

$maior_valor = $vetor[0];

foreach ($vetor as $valor) {
    if ($valor > $maior_valor) {
        $maior_valor = $valor;
    }
}
echo "O Maior valor é: $maior_valor \n";

$vetor = array_map(fn($x) => $x / $maior_valor, $vetor);

echo "Vetor após a divisão: " . implode(", \n", $vetor) . "\n";

?>
