<?php

// VARIAVEL QUANTIDADE DE REPETICOES
$qtd_carros = 15;
echo 'QUANTIDADE DE CARROS:'. $qtd_carros;

//VENDA
$venda = 0;
echo '</br>VENDA SE INICIA DO: '. $venda;

//LAÇO (WHILE)
//ENQUANTO O CONTADOR FOR MENOR OU IGUAL
//A QUANTIDADE DE REPETICOES REPETE
while($venda < $qtd_carros){


    $venda = $venda + 1;

    //REALIZOU UM VENDA
    echo'</br>QUANTIDADE DE VENDAS: '. $venda;

    //SE (IF) A SOBRA DA DIVISÃO POR 2 FOR IGUAL 0
    if($venda % 2 == 0){
        echo ' [PAR]';
    }else{
        echo ' [IMPAR]';
    }
}

?>