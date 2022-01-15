<?php

//CRIANDO VARIAVEL
$nome = "Ariane";
$sobrenome = " do Prado Campos Ivo";

//UTILIZANDO O PONTO . PARA CONCATENAR VALORES
$nome_completo = $nome . ' '. $sobrenome;

//EXIBINDO VALOR DA VARIAVEL
echo $nome_completo;

//VARIAVEL IDADE
$idade = 39;

//VERIFICANDO SE MAIOR DE IDADE

//SE (IF) A VARIAVEL IDADE FOR MAIOR QUE 18 MAIOR DE IDADE
// SE NAO (ELSE), MENOR DE IDADE
if($idade >=18){
    $resultadoidade= "Maior de idade";

}else{
    $resultadoidade = "Menor de idade";
}

echo '</br>';
echo $resultadoidade;

?>

