<!--AQUI E HTML-->

Teste

<?php

//AQUI E O PHP

 //PARA COLETAR UMA INFORMAÇÃO ENVIADA PELO USUARIO VIA FORM
    //UTILIZAMOS O $_POST

    $var_nome = $_POST[ 'frm_name'];
    echo $var_nome . '</br>';

//PARA COLETAR UMA INFORMAÇÃO ENVIADA PELO USUARIO VIA FORM
    //UTILIZAMOS O $_POST

    $var_idade = $_POST[ 'frm_idade'];
    echo $var_idade . '</br>';

//PARA COLETAR UMA INFORMAÇÃO ENVIADA PELO USUARIO VIA FORM
    //UTILIZAMOS O $_POST

    $var_sexo = $_POST[ 'frm_sexo'];
    //echo $var_sexo . '</br>';

    if($var_sexo=='M'){ 

        echo '<style>
            .caixa_exibicao{
                widht: 400px;
                height: 200px;
                border: solid 3px blue;
            }

            </style>';
    }else{

        echo '<style>
            .caixa_exibicao{
                widht: 400px;
                height: 200px;
                border: solid 3px pink;

            }
            </style>';
    }    

?>
<!--AQUI TEM HTML-->

  <!--AQUI É HTML-->
  <div class= "caixa_exibicao">

    <?php

        //AQUI É PHP
        echo $var_nome . '</br>';

    ?>    

</div>