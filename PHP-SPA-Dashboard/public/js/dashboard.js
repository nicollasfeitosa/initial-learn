function ajaxDashboard(periodo){

    $.ajax({ // método, url, dados, sucesso, erro
        type: 'GET',
        url: 'app.php',
        data: `periodo=${periodo}`, // Syntax x-www-form-urlencoded (como se fosse GET na URL)
        dataType: 'json',
        success: dados => {
            $('#numeroVendas').html(dados.numeroVendas)
            $('#totalVendas').html('R$: '+dados.totalVendas)

            $('#clienteAtivo').html(dados.clientesAtivos)
            $('#clienteInativo').html(dados.clientesInativos)

            $('#reclamacoes').html(dados.reclamacoes)
            $('#elogios').html(dados.elogios)
            $('#sugestoes').html(dados.sugestoes)

            $('#totalDespesas').html('R$: '+dados.despesasTotal)
        },
        error: erro => { console.log(erro) }
    })
}

function carregaDashboard(){

    $.get('pages/dashboard.html', data => {
        $('#pagina').html(data)

        var data = new Date();
        var mes = ("0" + (data.getMonth() + 1)).slice(-2);
        var ano = data.getFullYear();
        var periodo = ano+'-'+mes;
    
        console.log(periodo)

        $("#periodo").val(periodo);

        ajaxDashboard(periodo);

        // Ajax
        $('#periodo').on('change', e => {

            let periodo = $(e.target).val()

            if (periodo == 'default') {
                return 
            }

            ajaxDashboard(periodo);

        })
    })
}

$(document).ready(() => {

    carregaDashboard();

    $('#dashboard').on('click', () => {
        carregaDashboard();
    })
    
    $('#documentacao').on('click', () => {
        
        //$('#pagina').load('pages/documentacao.html') // Faz o request da página

        // $.post('pages/documentacao.html', data => {
        //     $('#pagina').html(data)
        // })

        $.get('pages/documentacao.html', data => {
            $('#pagina').html(data)
        })

    })

    $('#suporte').on('click', () => {
        
        //$('#pagina').load('pages/suporte.html') // Faz o request da página

        $.get('pages/suporte.html', data => {
            $('#pagina').html(data)
        })

    })
})