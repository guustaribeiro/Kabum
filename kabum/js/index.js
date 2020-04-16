$('#formadm').submit(function (ev) {

    const usuario = $('#usuario').val();
    const senha = $('#senha').val();

    ev.preventDefault();

    if (usuario === '') {
        alert('Preencha o campo usuário.');
        return;
    }

    if (!senha) {
        alert('Preencha o campo senha.');
        return;
    }

    // enviamos para a classe valida os dados de usuario e senha, capturados no começo da função submit.
    $.post('../models/valida-usuario.php', {usuario: usuario, senha: senha}, function(data){

        // Condicionais em cima do que é devolvido pela data no retorno da requisição da classe valida
        if (data == 401) {
            alert("Usuário ou senha inválido");
            $('#senha').val('').focus(); //apagando o input
            return;
        }
        else if (data == 200) {
            window.location = '../cliente/index.php';
        }
    });
});