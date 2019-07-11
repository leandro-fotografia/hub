(function ($) {
    $('a.btn-get-started').on('click', setTimeout(setData, 1000) );

    // Seta as informações na session storage para pegar mais tarde
    function setData() {
        $('input[type="submit"].wpcf7-form-control').on('click', function () {
            var form = $(this).parents('form');
            console.log(form);
            var dados = {
                nome: form.find('#nome').val(),
                email: form.find('#inputEmail4').val(),
                senha: form.find('#inputPassword4').val(),
                cidade: form.find('#inputCity').val(),
                estado: form.find('#inputEstado').val()
            };

            sessionStorage.setItem('usuario', JSON.stringify(dados));
        });
    }

    // Busca as informações
    function getData() {
        var dado = JSON.parse(sessionStorage.getItem('usuario'));
    }
})(jQuery);