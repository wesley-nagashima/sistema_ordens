// Validação JavaScript
function validarCampos(){
    
    var nome        = document.formCliente.nome_cliente.value;
    var endereco    = document.formCliente.endereco_cliente.value;
    var cpf         = document.formCliente.cpf_cliente.value;


    // VALIDA SE OS CAMPOS ESTÃO VAZIOS
    if (nome === '' || endereco === '' || cpf === '') {
        alert('Por favor, preencha todos os campos.');
        return false;
    }

    //VERIFICA SE O CAMPO CPF TEM MAIS DE 11 DIGITOS
    if (cpf.length > 11) {
        alert('O CPF deve ter apenas 11 dígitos. Sem pontos ou traços.');
        return false;
    }

    //VERIFICA SE O CAMPO CPF TEM MENOS DE 11 DIGITOS
    if (cpf.length < 11) {
        alert('O CPF deve ter 11 dígitos. Sem pontos ou traços.');
        return false;
    }
};