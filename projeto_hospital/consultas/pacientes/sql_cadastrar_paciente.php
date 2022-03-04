<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO DE PACIENTE via _POST
    $var_nm_paciente = $_POST['frm_nome_paciente'];    
    $var_sexo = $_POST['frm_sexo'];
    $var_dt_nascimento = $_POST['frm_dt_nascimento']; 

    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT
    $insere_paciente = "INSERT INTO hospital.PACIENTE
                            (nm_paciente,sexo,dt_nascimento)
                         VALUES 
                            ('$var_nm_paciente', '$var_sexo', '$var_dt_nascimento)";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_paciente = mysqli_query($conexao, $insere_paciente);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_paciente){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro no cadastro paciente.';        
        header('Location: ../../paciente.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Paciente cadastrado com sucesso!';   
        header('Location: ../../pacientes.php');
    }



?>