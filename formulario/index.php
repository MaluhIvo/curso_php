<!--AQUI E HTML-->

<form method="POST" action="salvar_dados.php">

    ===FORMULARIO===

    </br></br>Nome:
    <input type="text" name="frm_name">

    </br></br>CPF:
    <input type="number" name="frm_cpf">

    </br></br>Login:
    <input type="text" name="frm_login">

    </br></br>Senha:
    <input type="password" name="frm_password">
        
    </br></br><button type="submit">Enviar</button>

</form>

<?php
    //CHAMANDO CONEXAO
    include 'conexao.php';

    //AQUI E PHP
    //BUSCANDO DADOS DO CONVENIO
    $consulta_usuarios = "SELECT * FROM 
                        banco_iep.usuarios"; 

    //EXECUTANDO COMANDO NO BANCO
    $resultado = mysqli_query($conexao, $consulta_usuarios);

    //APENAS PARA O COMANDO SELECT
    //CRIANDO ARRAY(TABELA) COM AS INFORMACOES DA CONSULTA
    $linha = mysqli_fetch_array($resultado);    
?>

<table>
<tr>
    <th> Codigo</th>
    <th> Nome </th>
    <th> CPF </th>
    <th> Login </th>
    <th> Password </th>
</tr>
<tr>
    <td><?php echo $linha[ 'cd_usuario']; ?> </td>
    <td><?php echo $linha[ 'nome']; ?> </td>
    <td><?php echo $linha[ 'cpf']; ?> </td>
    <td><?php echo $linha[ 'login']; ?> </td>
    <td><?php echo $linha[ 'password']; ?> </td>
</tr>
</table>
<style>

    th{
        background-color: lightblue;
        border: solid 1px;
    }

</style>