<?php include("../models/banco/conexao.php"); ?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Kabum</title>
      <link href="../css/kabum.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <?php require_once "../models/banco/conexao.php"; ?>
      <div id="conteudo">
         <h2>Informações do Cliente</h2>
         <?php
            $txt = "select * from clientes where id=$_GET[id]";
            $sql = mysqli_query($conn, $txt);
            $info = mysqli_fetch_object($sql);
         ?>
         <form class="formulario_cliente">
            <input class="dados-cliente" id="id" type="hidden" name="id" value="<?php echo $info->id; ?>">
            Nome<BR />
            <input class="dados-cliente" type="text" disabled="disabled" name="nome" value="<?php echo $info->nome; ?>" />
            <BR /><BR />
            Data Nascimento<BR />
            <input class="dados-cliente" type="date" disabled="disabled" name="data_nasc" value="<?php echo $info->data_nasc; ?>" />
            <BR /><BR />
            CPF<BR />
            <input class="dados-cliente" disabled="disabled" name="cpf" value="<?php echo $info->cpf; ?>" />
            <BR /><BR />
            RG<BR />
            <input class="dados-cliente" disabled="disabled" name="rg" value="<?php echo $info->rg; ?>" />
            <BR /><BR />
            Telefone<BR />
            <input class="dados-cliente" disabled="disabled" name="telefone" value="<?php echo $info->telefone; ?>" />
            <BR /><BR />
            CEP<BR />
            <input class="dados-cliente" disabled="disabled" name="cep" value="<?php echo $info->cep; ?>" />
            <BR /><BR />
            Rua<BR />
            <input class="dados-cliente" disabled="disabled" name="rua" value="<?php echo $info->rua; ?>" />
            <BR /><BR />
            Bairro<BR />
            <input class="dados-cliente" disabled="disabled" name="bairro" value="<?php echo $info->bairro; ?>" />
            <BR /><BR />
            Cidade<BR />
            <input class="dados-cliente" disabled="disabled" name="cidade" value="<?php echo $info->cidade; ?>" />
            <BR /><BR />
            UF<BR />
            <input class="dados-cliente" disabled="disabled" name="uf" value="<?php echo $info->uf; ?>" />
            <BR /><BR />
            Número<BR />
            <input class="dados-cliente" disabled="disabled" name="numero" value="<?php echo $info->numero; ?>" />
            <BR /><BR />
         </form>
      </div>
   </body>
</html>