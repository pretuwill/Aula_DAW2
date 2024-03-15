<?php
$vetor = array();
for ($i = 0; $i < 40; $i++) {
    $vetor[] = rand(1, 50);
}
echo "Os valores: ";
foreach ($vetor as $valor) 
{
    echo "$valor ";    
}
$menor = min($vetor);
echo "<br>";
echo "O menor valor é: ", $menor;

?>