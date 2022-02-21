<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO DE ESPECIALIDADE via _POST
    $var_nm_especialidade = $_POST['frm_nome_especialidade'];    
    $var_sn_sus = $_POST['frm_sn_sus'];

    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT
    $insere_especialidade = "INSERT INTO hospital.ESPECIALIDADE
                            (nm_especialidade,sn_sus)
                         VALUES 
                            ('$var_nm_especialidade', '$var_sn_sus')";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_especialidade = mysqli_query($conexao, $insere_especialidade);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_especialidade){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro no cadastro especialidade.';        
        header('Location: ../../especialidades.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Especialidade cadastrado com sucesso!';   
        header('Location: ../../especialidades.php');
    }



?>