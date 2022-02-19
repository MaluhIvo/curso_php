<?php

    include 'cabecalho.php';

?>

<div class="div_titulo"> <h10> <i class="fas fa-address-card"></i> Especialidade </h10> </div>

Bem vindo a página de especialidade!
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

<!-- FORM PARA CADASTRAR CONVENIO -->

<form method="POST" action="consultas/especialidade/sql_cadastrar_especialidade.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="text" name="frm_nome_especilidade" placeholder="Especialidade" required>
        </div> 
        <div class="col-2">
            <input class="form-control" type="number" name="frm_sn_sus" placeholder="Codigo" required>
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
      <th> Especiadade </th>
      <th> S/N SUS </th>
      <th> Açoes </th>   
  </tr> 

    <?php

        //BUSCANDO DADOS DO BANCO DE DADOS
        include 'consultas/especialidade/sql_consultar_especialidade.php';

        //ESSE INCLUDE VAI ALIMENTAR A VARIAVEL $resultado_convenios
        //COM TODOS OS DADOS DOS CONVENIOS

        //EXIBINDO OS RESULTADOS POR LINHA
        while($row_esp= mysqli_fetch_assoc($resultado_especialidades)) {

    ?>
            <!--CONTEUDO-->
            <tr>
              <td> <?php echo $row_esp['cd_especialidade']; ?> </td>
              <td> <?php echo $row_esp['nm_especialidade']; ?> </td>
              <td> <?php echo $row_esp['sn_sus']; ?> </td>

              <!--FORM PARA EXCLUIR CONVENIO-->
              
              <form method="POST" action="consultas/especialidade/sql_excluir_especialidade.php">  

                <input class="form-control" type="number" value="<?php echo $row_esp['cd_especialidade']; ?>" name="frm_cd_especialidade" hidden>

                <td> <button class="btn btn-primary" type="submit"><i class="fa fa-trash" aria-hidden="true"></i> </button>
              
              </form>

            </tr>

   <?php } ?>  
  
</table>

<?php

include 'rodape.php';

?>