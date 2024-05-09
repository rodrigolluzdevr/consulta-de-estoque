<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Seleção de Departamentos e Produtos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<script>
    // Arquivo custom.js
    $(document).ready(function() {
        $('#departamentos').change(function() {
            var departamentoID = $(this).val();
            buscaProdutos(departamentoID);
        });

        function buscaProdutos(departamentoID) {
            var url = "welcome/buscaProdutosPorDepartamento";

            $.ajax({
                url: url,
                type: 'post',
                data: {
                    departamentos_id: departamentoID
                },
                dataType: 'json', // JSON format
                success: function(data) {
                    // Clear product list
                    $('#produtos').empty();
                    // Added new products to list
                    $.each(data, function(index, produto) {
                        $('#produtos').append('<option value="' + produto.produtos_id + '">' + produto.produtos_nome + '</option>');
                    });
                },
                error: function() {
                    alert('Erro ao carregar os produtos.');
                }
            });
        }
    });
</script>


<body >
    <p>
        Escolha o Departamento:<br />
        <select name="departamentos" id="departamentos">
            <?= $options_departamentos ?>
        </select>
    </p>
    <p>
        Escolha o Produto:<br />
        <select name="produtos" id="produtos">
        </select>
    </p>

</body>

</html>