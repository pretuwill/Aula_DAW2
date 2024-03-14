<?php
$valores = array();
$contador_3 = 0;
$quantidade_valores = 20;
$i = 0;

while ($i < $quantidade_valores) {
    $valor_aleatorio = rand(0, 5);
    $valores[] = $valor_aleatorio;
    
    if ($valor_aleatorio == 3) {
        $contador_3++;
    }
    $i++;
}
echo "Valores aleatórios entre 0 e 5:<br>";
foreach ($valores as $valor) {
    echo "$valor ";
}
echo "<br>O número de vezes que o valor 3 aparece é: $contador_3";
?>
