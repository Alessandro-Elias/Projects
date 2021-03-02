 function get_data(dado, cont){
    data = dado[cont];
    document.getElementById('nome'+ cont).innerHTML = data['nome'];
    document.getElementById('cpf'+ cont).innerHTML =  data['cpf'];

 };