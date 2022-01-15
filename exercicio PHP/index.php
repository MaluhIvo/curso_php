<?php

//CRIANDO VARIAVEL
$qtd_caixa = "10";
$und_caixa= "5";

//UTILIZANDO PONTO PARA CONCATENAR VALORES
$qtd_total = $qtd_caixa * $und_caixa;

//EXIBINDO VALOR DA VARIAVEL
//echo $qtd_total;

?>

<!-- TR - LINHA
     TH - COLUNA TITULO
     TD - COLUNA DE RESULTADO-->

<table style="text-align: center;">

<tr>
    <th>
        Quantidade de Caixa
    </th>

    <th>
        Unidades por Caixa
    </th> 
    <th>
        Quantidade por Caixa
    </th>
</tr>  

<!-- PHP-->

<tr>
    <td>
        <?php echo $qtd_caixa; ?>

    </td> 
    <td>
        <?php echo $und_caixa; ?>

    </td> 
    <td>
        <?php echo $qtd_total; ?>

    </td> 
</tr>

</table>