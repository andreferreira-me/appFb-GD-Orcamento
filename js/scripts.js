$(function() {
    $("#enviaOrcamento").click(function() {
        var nome = $("#nome").val();
        var email = $("#email").val(); // TODO: Validar E-mail
        var telefone = $("#telefone").val(); //TODO: Formatar máscara do telefone
        var ensaios = $("#ensaios").val();
        var mensagem = $("#mensagem").val();

        var varData = 'nome=' + nome + '&email=' + email + '&telefone=' + telefone + '&ensaios=' + ensaios + '&mensagem=' + mensagem + '';

        function insertAlert(){
            $("#resultAJAX").remove();
            $("#divMsg").after('<div id="resultAJAX" class="alert text-center" role="alert"></div>');
        }

        $.ajax({
            url: 'php/enviarOrcamento.php',
            type: 'POST',
            data: varData,
            success: function() {
                insertAlert();
                $("#resultAJAX").addClass("alert-success");
                $("#resultAJAX").html("Orçamento solicitado com sucesso!");
            },
            error: function() {
                insertAlert();
                $("#resultAJAX").addClass("alert-danger");
                $("#resultAJAX").html("Erro ao solicitar orçamento! Atualize a página e tente novamente!");
            }
        }); // end ajax call
    });
});