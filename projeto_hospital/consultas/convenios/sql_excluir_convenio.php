<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CONVENIO VIA _POST
    $var_cd_convenio = $_POST['frm_cd_convenio'];    

    //PRIMEIRO PASSO PARA DELETAR OS DADOS
    //FAZER A CONSULTA DO DELETE
    $excluir_convenios = "DELETE FROM hospital.CONVENIO WHERE cd_convenio = '$var_cd_convenio'";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_exclusao_convenio = mysqli_query($conexao, $excluir_convenios);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_exclusao_convenio){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro na exclusão do convênio.';        
        header('Location: ../../convenios.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Convênio excluido com sucesso!';   
        header('Location: ../../convenios.php');
    }



?>