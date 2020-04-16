//Validando os campos de telefone RG, CPF e telefone

$(document).ready(function () {
   $("#cpf").mask("000.000.000-00", {
      reverse: true
   });
   $("#rg").mask("00.000.000-0");

   var SPMaskBehavior = function (val) {
         return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
      },
      spOptions = {
         onKeyPress: function (val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
         }
      };

   $('#telefone').mask(SPMaskBehavior, spOptions);

});

//Validando todos os campos do fomulário de cadastro do cliente

$('#formcliente').submit(function (ev) {


   const nome = $('#nome').val();
   const data_nasc = $('#data_nasc').val();
   const cpf = $('#cpf').val();
   const rg = $('#rg').val();
   const telefone = $('#telefone').val();
   const cep = $('#cep').val();
   const rua = $('#rua').val();
   const bairro = $('#bairro').val();
   const cidade = $('#cidade').val();
   const uf = $('#uf').val();
   const numero = $('#numero').val();

   ev.preventDefault();

   if (nome === '') {
      alert('Preencha o campo nome.');
      return;
   }

   if (!data_nasc) {
      alert('Preencha o campo data.');
      return;
   }

   if (!cpf) {
      alert('Preencha o campo cpf.');
      return;
   }
   if (!rg) {
      alert('Preencha o campo RG.');
      return;
   }
   if (!telefone) {
      alert('Preencha o campo telefone.');
      return;
   }
   if (!cep) {
      alert('Preencha o campo CEP.');
      return;
   }
   if (!numero) {
      alert('Preencha o campo numero.');
      return;
   }

   $.post('../models/inserir-cliente.php', {

         nome: nome,
         data_nasc: data_nasc,
         cpf: cpf,
         rg: rg,
         telefone: telefone,
         cep: cep,
         rua: rua,
         bairro: bairro,
         cidade: cidade,
         uf: uf,
         numero: numero
      },
      function (data) {
         window.location = '../cliente/index.php';
      });
});

//Validando todos os campos do fomulário de atualização de dados do cliente

$('#formatualiza').submit(function (ev) {

   const id = $('#id').val();
   const nome = $('#nome').val();
   const data_nasc = $('#data_nasc').val();
   const cpf = $('#cpf').val();
   const rg = $('#rg').val();
   const telefone = $('#telefone').val();
   const cep = $('#cep').val();
   const rua = $('#rua').val();
   const bairro = $('#bairro').val();
   const cidade = $('#cidade').val();
   const uf = $('#uf').val();
   const numero = $('#numero').val();

   ev.preventDefault();

   if (nome === '') {
      alert('Preencha o campo nome.');
      return;
   }

   if (!data_nasc) {
      alert('Preencha o campo data.');
      return;
   }

   if (!cpf) {
      alert('Preencha o campo cpf.');
      return;
   }
   if (!rg) {
      alert('Preencha o campo RG.');
      return;
   }
   if (!telefone) {
      alert('Preencha o campo telefone.');
      return;
   }
   if (!cep) {
      alert('Preencha o campo CEP.');
      return;
   }
   if (!numero) {
      alert('Preencha o campo numero.');
      return;
   }

   $.post('../models/atualizar-cliente.php', {
         id: id,
         nome: nome,
         data_nasc: data_nasc,
         cpf: cpf,
         rg: rg,
         telefone: telefone,
         cep: cep,
         rua: rua,
         bairro: bairro,
         cidade: cidade,
         uf: uf,
         numero: numero
      },
      function (data) {
         window.location = '../cliente/index.php';
      });
});

//Script para puxar todas as informações do CEP do cliente

$("#cep").blur(function () {

   //Nova variável "cep" somente com dígitos.
   var cep = $(this).val().replace(/\D/g, '');

   //Verifica se campo cep possui valor informado.
   if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if (validacep.test(cep)) {

         //Preenche os campos com "..." enquanto consulta webservice.
         $("#rua").val("...");
         $("#bairro").val("...");
         $("#cidade").val("...");
         $("#uf").val("...");

         //Consulta o webservice viacep.com.br/
         $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

            if (!("erro" in dados)) {

               //Atualiza os campos com os valores da consulta.
               $("#rua").val(dados.logradouro);
               $("#bairro").val(dados.bairro);
               $("#cidade").val(dados.localidade);
               $("#uf").val(dados.uf);
            } //end if.
            else {

               //CEP pesquisado não foi encontrado.
               limpa_formulário_cep();
               alert("CEP não encontrado.");
            }
         });

      } //end if.
      else {

         //cep é inválido.
         limpa_formulário_cep();
         alert("Formato de CEP inválido.");
      }

   } //end if.
   else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
   }
});