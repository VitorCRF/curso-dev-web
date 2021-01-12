$(document).ready(function() { 
    //Função que obtém os dados do arquivo JSON
    $.getJSON("javascript/recrutamento.json", function(data){
        var dados = "";
        //Percorre o arquivo e atribui cada linha na variável "dados"
        $.each(data, function(key, value){
          dados += '<tr>';
          dados += '<td>'+value.item+'</td>';
          dados += '<td>'+value.quantidade+'</td>';
          dados += '<td>'+value.total+'</td>';
          dados += '<td>'+value.dia+'</td>';
          dados += '</tr>';
        });
        //Insere na tabela todos os valores lidos do arquivo
        $("#tableProdutos").append(dados);
      });
});