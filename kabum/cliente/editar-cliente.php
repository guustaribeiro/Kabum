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
         <h2>Atualizar Cliente</h2>
         <?php
            $txt = "select * from clientes where id=$_GET[id]";
            $sql = mysqli_query($conn, $txt);
            $info = mysqli_fetch_object($sql);
         ?>
         <form method="post" id="formatualiza" action="../models/atualizar-cliente.php" class="formulario_cliente">
            <input class="dados-cliente" id="id" type="hidden" name="id" value="<?php echo $info->id; ?>">
            Nome<BR />
            <input class="dados-cliente" id="nome" type="text" placeholder="Digite o nome" name="nome" value="<?php echo $info->nome; ?>" />
            <BR /><BR />
            Data Nascimento<BR />
            <input class="dados-cliente" id="data_nasc" type="date" placeholder="Data de nascimento" name="data_nasc" value="<?php echo $info->data_nasc; ?>" />
            <BR /><BR />
            CPF<BR />
            <input class="dados-cliente" id="cpf" type="text" placeholder="Digite o seu CPF" name="cpf" value="<?php echo $info->cpf; ?>" />
            <BR /><BR />
            RG<BR />
            <input class="dados-cliente" id="rg" type="text" placeholder="Digite o seu RG" name="rg" value="<?php echo $info->rg; ?>" />
            <BR /><BR />
            Telefone<BR />
            <input class="dados-cliente" id="telefone" type="text" placeholder="Digite o seu telefone" name="telefone" value="<?php echo $info->telefone; ?>" />
            <BR /><BR />
            CEP<BR />
            <input class="dados-cliente" id="cep" type="text" placeholder="Digite o seu CEP" name="cep" value="<?php echo $info->cep; ?>" />
            <BR /><BR />
            Rua<BR />
            <input class="dados-cliente" id="rua" type="text" placeholder="Rua" name="rua" value="<?php echo $info->rua; ?>" />
            <BR /><BR />
            Bairro<BR />
            <input class="dados-cliente" id="bairro" type="text" placeholder="Bairro" name="bairro" value="<?php echo $info->bairro; ?>" />
            <BR /><BR />
            Cidade<BR />
            <input class="dados-cliente" id="cidade" type="text" placeholder="Cidade" name="cidade" value="<?php echo $info->cidade; ?>" />
            <BR /><BR />
            UF<BR />
            <input class="dados-cliente" id="uf" type="text" placeholder="Estado" name="uf" value="<?php echo $info->uf; ?>" />
            <BR /><BR />
            Número<BR />
            <input class="dados-cliente" id="numero" type="text" placeholder="Número" name="numero" value="<?php echo $info->numero; ?>" />
            <BR /><BR />
            <button type="submit"> Atualizar </button>
         </form>
      </div>
      <script src="../libs/jquery-3.5.0.min.js"></script>
      <script src="../libs/jquery.mask.min.js"></script>
      <script src="../js/scripts.js"></script>
   </body>
</html>