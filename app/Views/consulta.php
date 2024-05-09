<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Consulta de Estoque</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<script>
    $(document).ready(function() {
        $('#departamentos').change(function() {
            var departamentoID = $(this).val();
            buscaProdutos(departamentoID);
        });

        function buscaProdutos(departamentoID) {
            var url = "consulta/buscaProdutosPorDepartamento";

            $.ajax({
                url: url,
                type: 'post',
                data: {
                    departamentos_id: departamentoID
                },
                dataType: 'json', // JSON format
                success: function(data) {
                    // clear product list
                    $('#produtos').empty();
                    // added new products to list
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

<body>
    <div class="container mt-10 bg-transparent">
        <div>
            <!--begin::Title-->
            <h2 class="fs-2x fw-bold p-5 d-flex justify-content-center text-dark">Consulta de Estoque</h2>
            <!--end::Title-->
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="p-0">
                    <!--begin::Wrapper-->
                    <div class="text-center py-20 my-10">
                        <!--begin::Description-->
                        <p class="text-gray-400 fs-4 fw-semibold mb-10 text-dark opacity-75">Escolha o Departamento:</p>
                        <select class="form-control mb-4" name="departamentos" id="departamentos">
                            <?= $options_departamentos ?>
                        </select>
                        <!--end::Description-->
                    </div>
                    <!--end::Wrapper-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-0">
                    <!--begin::Wrapper-->
                    <div class="text-center py-20 my-10">
                        <!--begin::Description-->
                        <p class="text-gray-400 fs-4 fw-semibold mb-10 text-dark opacity-75">Escolha o Produto:</p>
                        <select class="form-control mb-4" name="produtos" id="produtos">
                        </select>
                        <!--end::Description-->
                    </div>
                    <!--end::Wrapper-->
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <img src="app/images/g7sistemas.webp" alt="G7 Sistemas" class="img-fluid d-block mx-auto mb-5" style="max-width: 200px;">
    </div>
</body>

</html>