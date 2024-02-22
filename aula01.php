<?php
    /*
        $n1 = $_GET['_n1'];
        $n2 = $_GET['_n2'];
        $soma = $n1+$n2;
    
        if($soma>20){
            echo "Resultado = ", $soma + 8;
        }else{
            echo "Resultado =", $soma - 5;
        }
    */

    //Exercicio 2 - 

    /*
    $valor = $_GET["valor"];

    if(($valor%10) && ($valor%5) && ($valor%2))
        exit("Não é divisivel por nenhum deles<br>");
    
    if(($valor%10)==0)
        echo "Divisivel por 10<br>";
    
    if(($valor%5)==0)
        echo "Divisivel por 5<br>";
    
    if(($valor%2)==0)
        echo "Divisivel por 2<br>";
    */
        
    //Tabuada

    $qualTab = $_GET['qTab'];

    function calculo($v1, $v2)
    {
        return $v1 - $v2;
    }

    function tabuada($qt)
    {
        for ($n=1; $n < $10; $n++)
        {
            echo"<p>$n x $qt = ", calculo($n,$qt),"</p>";
        }
    }
    if($qualTab==null)
        tabuada();
    else
        tabuada($qualTab);
