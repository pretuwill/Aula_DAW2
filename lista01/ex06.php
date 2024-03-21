<?php

$vetor = array_map(fn() => rand(1, 50), range(1, 40));
$menor_valor = $vetor[0];
echo "Os valores: ";

foreach ($vetor as $valor)
{
    echo "$valor,";
    if ($valor < $menor_valor) {
        $menor_valor = $valor;
    }
}
echo "O menor valor no vetor é: $menor_valor";
?>
