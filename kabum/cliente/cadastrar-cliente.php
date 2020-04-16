<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Kabum</title>
      <link href="../css/kabum.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <?php require_once "../models/banco/conexao.php"; ?>
      <div id="conteudo">
         <h2>Cadastrar Cliente</h2>
         <form method="post" id="formcliente" action="./models/inserir-cliente.php" class="formulario_cliente">
            Nome<BR />
            <input class="dados-cliente" id="nome" type="text" placeholder="Digite o nome" name="nome" />
            <BR /><BR />
            Data Nascimento<BR />
            <input class="dados-cliente" id="data_nasc" type="date" placeholder="Data de nascimento" name="data_nasc" />
            <BR /><BR />
            CPF<BR />
            <input class="dados-cliente" id="cpf" type="text" placeholder="Digite o seu CPF" name="cpf" />
            <BR /><BR />
            RG<BR />
            <input class="dados-cliente" id="rg" type="text" placeholder="Digite o seu RG" name="rg" />
            <BR /><BR />
            Telefone<BR />
            <input class="dados-cliente" id="telefone" type="text" placeholder="Digite o seu telefone" name="telefone" />
            <BR /><BR />
            CEP<BR />
            <input class="dados-cliente" id="cep" type="text" placeholder="Digite o seu CEP" name="cep" />
            <BR /><BR />
            Rua<BR />
            <input class="dados-cliente" id="rua" type="text" placeholder="Rua" name="rua" />
            <BR /><BR />
            Bairro<BR />
            <input class="dados-cliente" id="bairro" type="text" placeholder="Bairro" name="bairro" />
            <BR /><BR />
            Cidade<BR />
            <input class="dados-cliente" id="cidade" type="text" placeholder="Cidade" name="cidade" />
            <BR /><BR />
            UF<BR />
            <input class="dados-cliente" id="uf" type="text" placeholder="Estado" name="uf" />
            <BR /><BR />
            Número<BR />
            <input class="dados-cliente" id="numero" type="text" placeholder="Número" name="numero" />
            <BR /><BR />
            <button type="submit"> Cadastrar </button>
         </form>
      </div>
      <script src="../libs/jquery-3.5.0.min.js"></script>
      <script src="../libs/jquery.mask.min.js"></script>
      <script src="../js/scripts.js"></script>
   </body>
</html>
