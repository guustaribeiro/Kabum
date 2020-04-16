<?php include("../login/verifica-sessao.php") ?>
<?php include("../models/banco/conexao.php"); ?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Kabum</title>
    <link href="../css/kabum.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="conteudo">
      <?php
        $txt = "select * from clientes order by nome asc";
        $sql = mysqli_query($conn, $txt);
      ?>
      <h2>Clientes Cadastrados <?php include("saudacao.php"); ?></h2>
      <button type="button" class="btnCadastraCliente" onClick="pagCadastraCliente()">Cadastrar Cliente</button>
      <BR /><BR />
      <table>
        <tr>
          <th>Nome</th>
          <th>Data Nascimento</th>
          <th>CPF</th>
          <th>RG</th>
          <th>Telefone</th>
          <th style="text-align: center;">Editar</th>
        </tr>

        <?php
        while ($dados = mysqli_fetch_object($sql)) {
        ?>
          <tr>
            <td><?php echo $dados->nome; ?></td>
            <td><?php echo date("d/m/Y", strtotime($dados->data_nasc)); ?></td>
            <td><?php echo $dados->cpf; ?></td>
            <td><?php echo $dados->rg; ?></td>
            <td><?php echo $dados->telefone; ?></td>
            <td style="text-align: center;">
              <a href="editar-cliente.php?id=<?php echo $dados->id; ?>"><img src="../img/e.png" width="20" /></a>
              <a href="../models/apagar-cliente.php?id=<?php echo $dados->id; ?>"><img src="../img/r.png" width="20" /></a>
              <a href="info-cliente.php?id=<?php echo $dados->id; ?>"><img src="../img/v.png" width="20" /></a>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <script src="../libs/jquery-3.5.0.min.js"></script>
    <script src="../libs/jquery.mask.min.js"></script>
    <script src="../js/clientes.js"></script>
  </body>
</html>