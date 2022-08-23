$("input[name=cep]").blur(function (e) {

    buscaCEP();

})

function buscaCEP() {
    var cep = $("input[name=cep]").val() || ''

    if (!cep) {
        return
    }

    var url = 'http://viacep.com.br/ws/' + cep + '/json/'

    $.getJSON(url, function(data) {

        if ("error" in data) {
            return
        }

        $('input[name="street"]').val(data.logradouro)
        $('input[name="neighborhood"]').val(data.bairro)
        $('input[name="uf"]').val(data.uf)
        $('input[name="city"]').val(data.localidade)
    })
}

