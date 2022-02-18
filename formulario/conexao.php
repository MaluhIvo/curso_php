<?php

//INFORMACOES DO BANCO DE DADOS MYSQL
$servidor = "localhost";
$login = "root";
$senha = "";

//CONECTAR COM O BANCO
//@IGNORA MENSAGENS DE ERRO
@$conexao =new mysqli($servidor, $login, $senha);

//CHEGAR A CONEXAO
if($conexao->connect_error){
    //EXIBINDO O ERRO
    echo 'Erro na conexão:' . $conexao->connect_erros;
}else{
    //echo 'Conectado com sucesso!';
}

?>