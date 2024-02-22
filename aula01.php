<?php
    $n1 = $_GET['_n1'];
    $n2 = $_GET['_n2'];
    $soma = $n1+$n2;

    if($soma>20){
        echo "Resultado = ", $soma + 8;
    }else{
        echo "Resultado =", $soma - 5;
    }