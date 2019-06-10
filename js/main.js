function senhaLength(value, id){
    if(value.length < 8){
        document.getElementById(id).className="form-control is-invalid";
        document.getElementById('msg_senha').innerHTML = "<p class=\"badge badge-danger\">Senha muito curta</p>";
    }else if(value.length > 8){
        document.getElementById(id).className="form-control is-valid";
        document.getElementById('msg_senha').innerHTML = "<p class=\"badge badge-success\">Senha aceitável</p>";
    }
}
//formatação numeros
$(document).ready(function(){
    $("#cnpj").mask("00.000.000/0000-00");
    $("#cpf").mask("000.000.000-00");
    $("#tel").mask("(00) 0000-0000");
    $("#cel").mask("(00) 0 0000-0000");
    $("#cep").mask("00.000-000");
});

//valiadação tipo de cadastro
function mudaTipo(value){
    if(value == 1){
        document.getElementById('cnpj').disabled=false;
        document.getElementById('cnpj').required=true;
        document.getElementById('cnpj').focus();
        document.getElementById('cpf').required=false;
        document.getElementById('divNome').innerHTML =
            "<td><label>Nome Fantasia</label><input type='text' name='fantasia' class='form-control' required></td><td colspan='2'><label>Razão Social</label><input type='text' name='social' class='form-control' required></td>";
    }
    else if(value == 2){
        document.getElementById('cnpj').disabled=true;
        document.getElementById('cnpj').value = null;
        document.getElementById('cpf').disabled=false;
        document.getElementById('cpf').focus();
        document.getElementById('cpf').required=true;
        document.getElementById('divNome').innerHTML =
            "<td colspan='3'><label>Nome</label><input type='text' name='social' class='form-control' required></td>";
    }

}

function testaCpf(strCPF) {
    console.log(strCPF);
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000"){

        return false;
    }
    if (strCPF == "11111111111"){

        return false;
    }
    if (strCPF == "22222222222"){

        return false;
    }
    if (strCPF == "33333333333"){

        return false;
    }
    if (strCPF == "44444444444"){

        return false;
    }
    if (strCPF == "55555555555"){

        return false;
    }
    if (strCPF == "66666666666"){

        return false;
    }
    if (strCPF == "77777777777"){

        return false;
    }
    if (strCPF == "88888888888"){

        return false;
    }
    if (strCPF == "99999999999"){

        return false;
    }

    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ){

        return false;
    }

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ){

        return false;
    } else {
        return true;
    }


}
function validaCpf(str){
    var intCpf = str.replace(/[^0-9]/g,'');
    var msg = (testaCpf(intCpf));
    if (msg == true) {
        mudaTipo(str);
        document.getElementById('cpf').className = "form-control is-valid";
        document.getElementById('msg_cpf').innerHTML = "<p class=\"badge badge-success\">Cpf Válido</p>";
        return true;
    }else{
        document.getElementById('cpf').className = "form-control is-invalid";
        document.getElementById('msg_cpf').innerHTML = "<p class=\"badge badge-danger\">Cpf inválido</p>";
        return false;
    }
    //document.getElementById('msg').innerHTML = "CPF Válido!";
}
function validaFormCpf(form){
    if (validaCpf() == false) {
        return false
    }else{
        document.getElementById(formUsuario).submit();
    }
}


function classe(id){
    document.getElementById(id).className="active";
}
function popup(pag){
    console.log(pag);
    window.open(pag, "nome", "width='100', height='100', left=\"50px\" scrollbars='1', location=no, directories=no, status=no, menubar=no, toolbar=no, resizable=false");
}
function printPage(){
    window.print();
    window.close();
}
function numFilter(num, id) {
    if (isNaN(num)){
        alert('Por Favor, insira um número');
        document.getElementById(id).value='';
    }
}