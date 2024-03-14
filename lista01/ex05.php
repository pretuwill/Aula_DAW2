<?php
$primeiro_vetor = array();
for ($i = 0; $i < 12; $i++) {
    $primeiro_vetor[] = rand(0, 5);
}
echo "Primeiro vetor: ";
foreach ($primeiro_vetor as $valor) {
    echo "$valor ";
}
echo "<br>";

$segundo_vetor = array();
foreach ($primeiro_vetor as $valor) {
    if ($valor == 3) {
        $segundo_vetor[] = 7;
    } else {
        $segundo_vetor[] = $valor;
    }
}
echo "Segundo vetor (substituindo 3 por 7): ";
foreach ($segundo_vetor as $valor) {
    echo "$valor ";
}
?>
