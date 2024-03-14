<?php
$data_atual = date("Y-m-d");
$data_inicio_ano = date("Y-01-01");
$data_atual_obj = new DateTime($data_atual);
$data_inicio_ano_obj = new DateTime($data_inicio_ano);

$diferenca_dias = $data_atual_obj->diff($data_inicio_ano_obj)->format("%a");

echo "Número de dias que passaram desde o início do ano: $diferenca_dias dias";
?>