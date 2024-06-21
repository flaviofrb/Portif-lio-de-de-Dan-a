
$(document).ready(function () {
    $('#generate-pdf').click(function (event) {
        event.preventDefault();

        // Realize uma solicitação AJAX para gerar o PDF
        $.ajax({
            url: '/exportar-pdf',
            type: 'GET',
            success: function (response) {
                // Certifique-se de que a resposta contenha o PDF gerado
                if (response.success) {
                    // Abra uma nova aba para exibir o PDF
                    window.open('/Portifólio-pdf', '_blank');
                }
            },
            error: function () {
                // Lide com erros de solicitação AJAX, se necessário
                console.error('Erro na solicitação AJAX para gerar o PDF.');
            }
        });
    });
});