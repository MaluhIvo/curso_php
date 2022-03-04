<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO PACIENTE VIA _POST
    $var_cd_paciente = $_POST['frm_cd_paciente'];    

    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT
    $excluir_paciente = "DELETE FROM hospital.PACIENTE WHERE cd_paciente = '$var_cd_paciente'";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_exclusao_paciente = mysqli_query($conexao, $excluir_paciente);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_exclusao_paciente){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro na exclusão do paciente.';        
        header('Location: ../../pacientes.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Paciente excluido com sucesso!';   
        header('Location: ../../pacienteses.php');
    }



?>