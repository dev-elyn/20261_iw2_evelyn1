<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Camisetas</title>
    <link rel="shortcut icon" href="favicon.ico?v=1" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            function loadTable() {
                $.get("consulta.php", function (resposta) {
                    $(".funciona").html(resposta);
                });
            }

            loadTable();

            $("#formulario").on("submit", function (e) {
                e.preventDefault();

                let corSelecionada = $("#cor").val();
                let tamanhoSelecionado = $("#tamanho").val();


                let data = {
                    cor: corSelecionada,
                    tamanho: tamanhoSelecionado
                };

                $.ajax({
                    url: "insere.php",
                    type: "POST",
                    data: data,
                    dataType: "html"
                }).done(function (resposta) {
                    $(".funciona").html(resposta);
                    $("#myModal").modal("hide");

                }).fail(function (jqXHR, textStatus) {
                    console.log("Erro ao concluir " + textStatus);
                    
                }).always(function () {
                    console.log("Concluído com sucesso");
                });
            });

            $(document).on('click', '.excluir', function(){
                var id = $(this).data("id");
                $.ajax({
                    url: "apaga.php",
                    type: "POST",
                    data: { id: id },
                    dataType: "html"
                }).done(function (resposta) {
                    $(".funciona").html(resposta);
                }).fail(function (jqXHR, textStatus) {
                    $(".funciona").html("Erro ao concluir " + textStatus);
                }).always(function () {
                    console.log("Concluído com sucesso");
                });
            });

            // queria virar pro em sql php todas as linguagens de um dia para o outro mas eu preciso de paciência constância e foco aaaaaaaaaaaaaaa
            $(document).on("click", ".editar", function(){
                id = $(this).data("id");
                $.ajax({
                    url: "consulta_editar.php",
                    type: "POST",
                    data: {id : id},
                    dataType: "json"
                }).done(function(resposta){
                    $("#cor_edit").val(resposta.nome);
                    $("#tamanho_edit").val(resposta.distrito);

                    $("ModalEdit").modal("show");
                }).fail(function(jqXHR, textStatus) {
                    $("#resultado").html("Request failed: " + textStatus);
                }).always(function(){
                    console.log("completou busca de edicao");
                });
            });

        });
    </script>
</head>

<body>
    <div class="container mt-3">
    <h2>Faça o seu pedido</h2>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Clique aqui
    </button>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">
      
        <div class="modal-header">
          <h4 class="modal-title">Preencha as informações</h4>
        </div>
        
    <div class="modal-body">
    <div class="card">
        <form id="formulario" method="post" action="insere.php">
            <input type="hidden" id="id_editar" name="id" value="">
            <label for="form"> Selecione a cor </label>
            <input type="text" id="cor" name="cor" list="cores">
            <datalist id="cores">
                <option value="Preto"></option>
                <option value="Cinza"></option>
                <option value="Branco"></option>
                <option value="Roxo"></option>
                <option value="Rosa"></option>
            </datalist>

            <br><label for="form"> Selecione o tamanho </label>
            <input type="text" id="tamanho" name="tamanho" list="tamanhos">
            <datalist id="tamanhos">
                <option value="PP"></option>
                <option value="P"></option>
                <option value="M"></option>
                <option value="G"></option>
                <option value="GG"></option>
            </datalist>
        </form>
    </div>
    </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-success" form="formulario">Enviar</button>
        </div>
        
      </div>
    </div>
  </div>

  <div class="container mt-3">
      <div class="funciona"></div>
  </div>

</body>
</html>