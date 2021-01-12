$(document).ready(function () {
  var dados = "";
  var maior = 0;
  var maisVendido = "";
  //Função que obtém os dados do arquivo JSON
  $.getJSON("javascript/recrutamento.json", function (data) {
    //Matriz que separa os itens para não repetir na tabela
    var itens = [["Item 1", 0, 0], ["Item 2", 0, 0], ["Item 3", 0, 0], ["Item 4", 0, 0], ["Item 5", 0, 0]];

    //Percorre todo o arquivo e filtra apenas os items de Dezembro/2018
    $.each(data, function (key, value) {
      if (value.dia[3] == "1" && value.dia[4] == "2" && value.dia[8] == "1" && value.dia[9] == "8") {
        //Separa os 5 itens e faz a soma de cada um, armazenando a quantidade de vendas e o valor total
        for (var i = 1; i <= itens.length; i++) {
          if (value.item == "item " + i) {
            itens[i - 1][1] += parseInt(value.quantidade);
            itens[i - 1][2] += parseFloat(value.total);
          }
        }
      }
    });
    //Percorre o array onde estão armazenados os produtos e encontra o mais vendido
    for (var i = 0; i < itens.length - 1; i++) {
      if (itens[i][1] > maior) {
        maior = itens[i][1];
        maisVendido = itens[i][0];
      }
    }
    //Percorre o array onde estão armazenados os produtos mais vendidos e insere na tabela do HTML
    for (var i = 0; i < itens.length; i++) {
      dados += '<tr>';
      dados += '<td>' + itens[i][0] + '</td>';
      dados += '<td>' + itens[i][1] + '</td>';
      dados += '<td>' + itens[i][2] + '</td>';
      dados += '</tr>';
    }
    $("#tableProdutos").append(dados);
    //Insere a informação do produto mais vendo na div que é exibida no HTML
    $("#maisVendido").append(maisVendido);
  });
});
