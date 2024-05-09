// Arquivo custom.js

function buscaProdutos(id_departamento) {
    var url = "/welcome/buscaProdutosPorDepartamento"; // URL da rota

    $.post(url, {
        id_departamento: id_departamento
    }, function(data) {
        $('#produtos_nome').html(data);
    });
}
