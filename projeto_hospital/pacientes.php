<?php

    include 'cabecalho.php';

?>

<div class="div_titulo"> <h10> <i class="fas fa-address-card"></i> Paciente </h10> </div>

Bem vindo a página de paciente!
</br></br>

<!-- CHAMANDO ALERT COM A SESSAO SE A SESSAO ESTIVER ATIVA -->

<?php 

    //SE EXISTIR DADOS NA SESSAO msg_execucao
    if(isset($_SESSION['msg_execucao'])){

?>
            <!-- EXIBE A SESSAO NUM ALERT BOOTSTRAP -->
            <div class="alert alert-primary" role="alert">
                <?php echo $_SESSION['msg_execucao']; ?>    
            </div>

<?php 
    
            //DEPOIS DE EXIBIR A SESSAO, LIMPA ELA
            unset($_SESSION['msg_execucao']);

    }

?>

<!-- FORM PARA CADASTRAR PACIENTE -->

<form method="POST" action="consultas/paciente/sql_cadastrar_paciente.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="text" name="frm_nome_paciente" placeholder="Paciente" required>
        </div> 
        <div class="col-3">
            <input class="form-control" type="text" name="frm_nome_sexo" placeholder="Sexo" required>
        </div>  
        <div class="col-2">
            <input class="form-control" type="number" name="frm_dt_nascimento" placeholder="Data Nascimento" required>
        </div>  
        <div class="col-1">
            <button class="btn btn-primary" type="submit"> <i class="fas fa-plus"></i> </button>
        </div>      
    </div>
</form>

</br>

<table class="table table-striped table-hover">

  <!-- PRIMEIRA LINHA (TR) TITULO (TH) -->
  <tr>
      <th> Código </th>
      <th> Paciente </th>
      <th> Sexo </th>
      <th> Data Nascimento </th>   
  </tr> 

    <?php

        //BUSCANDO DADOS DO BANCO DE DADOS
        include 'consultas/pacientes/sql_consultar_pacientes.php';

        //ESSE INCLUDE VAI ALIMENTAR A VARIAVEL $resultado_paciente
        //COM TODOS OS DADOS DOS PACIENTES

        //EXIBINDO OS RESULTADOS POR LINHA
        while($row_esp= mysqli_fetch_assoc($resultado_paciente)) {

    ?>
            <!--CONTEUDO-->
            <tr>
              <td> <?php echo $row_esp['cd_paciente']; ?> </td>
              <td> <?php echo $row_esp['nm_paciente']; ?> </td>
              <td> <?php echo $row_esp['sexo']; ?> </td>
              <td> <?php echo $row_esp['dt_nascimento']; ?> </td>

              <!--FORM PARA EXCLUIR PACIENTE-->
              
              <form method="POST" action="consultas/pacientes/sql_excluir_paciente.php">  

                <input class="form-control" type="number" value="<?php echo $row_esp['cd_paciente']; ?>" name="frm_cd_paciente" hidden>

                <td> <button class="btn btn-primary" type="submit"><i class="fa fa-trash" aria-hidden="true"></i> </button>
              
              </form>

            </tr>

   <?php } ?>  
  
</table>

<?php

include 'rodape.php';

?>