<?php

//CHAMANDO CONEXAO
include 'conexao.php';

//AQUI E O PHP

 //PARA COLETAR UMA INFORMAÇÃO ENVIADA PELO USUARIO VIA FORM
    //UTILIZAMOS O $_POST

    $var_nome = $_POST[ 'frm_name'];
    echo $var_nome . '</br>';

//PARA COLETAR UMA INFORMAÇÃO ENVIADA PELO USUARIO VIA FORM
    //UTILIZAMOS O $_POST

    $var_cpf = $_POST[ 'frm_cpf'];
    echo $var_cpf . '</br>';

//PARA COLETAR UMA INFORMAÇÃO ENVIADA PELO USUARIO VIA FORM
    //UTILIZAMOS O $_POST

    $var_login = $_POST[ 'frm_login'];
    echo $var_login . '</br>';
    

    $var_password = $_POST[ 'frm_password'];
    echo $var_password . '</br>';

    //BUSCANDO DADOS DO CONVENIO
    $salva_usuario = "insert into banco_iep.usuarios (nome, cpf, login, password) 
    values ('$var_nome', $var_cpf, '$var_login', '$var_password')";

    echo $salva_usuario;
    //EXECUTANDO COMANDO NO BANCO
    $resultado = mysqli_query($conexao, $salva_usuario);
    
    echo $resultado . '</br>'

   

?>
<!--AQUI TEM HTML-->

  <!--AQUI É HTML-->
  <div class= "caixa_exibicao">

    <?php

        //AQUI É PHP
        echo $var_nome . '</br>';

    ?>    

</div>