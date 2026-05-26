<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Camisetas</title>
    <link rel="shortcut icon" href="favicon.ico?v=1" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#formulario").on("click", function (e) {
                e.preventDefault()

                let corSelecionada = $("#cor").val();
                let tamanhoSelecionado = $("#tamanho").val();

                $.ajax({
                    url: "insere.php",
                    type: "POST",
                    data: "cor=" + corSelecionada + "&tamanho=" + tamanhoSelecionado,
                    dataType: "html"

                }).done(function (resposta) {
                    $(".funciona").html(resposta);

                }).fail(function (jqXHR, textStatus) {
                    console.log("Erro ao concluir" + textStatus);

                }).always(function () {
                    console.log("Concluído com sucesso");
                });
               });

                $(document).on('click', '.excluir', function(){
                    var id =$(this).attr("id");
                    $.ajax({
                    url: "apaga.php",
                    type: "POST",
                    data: { id: id },
                    dataType: "html"

                }).done(function (resposta) {
                    $(".funciona").html(resposta);

                }).fail(function (jqXHR, textStatus) {
                    $(".funciona").html("Erro ao concluir" + textStatus);

                }).always(function () {
                    console.log("Concluído com sucesso");
                });

            });
        });

    </script>
</head>

<body>
    <div class="card">
        <form id="formulario" method="post" action="insere.php">
            <label for="form"> Selecione a cor </label>
            <input type="text" id="cor" name="cor" list="cores">
            <datalist id="cores">
                <option value="Preto"></option>
                <option value="Cinza"></option>
                <option value="Branco"></option>
                <option value="Roxo"></option>
                <option value="Rosa"></option>
            </datalist>

            <label for="form"> Selecione o tamanho </label>
            <input type="text" id="tamanho" name="tamanho" list="tamanhos">
            <datalist id="tamanhos">
                <option value="PP"></option>
                <option value="P"></option>
                <option value="M"></option>
                <option value="G"></option>
                <option value="GG"></option>
            </datalist>
            <input type="submit">
        </form>
        <div class="funciona"></div>
    </div>
</body>
</html>