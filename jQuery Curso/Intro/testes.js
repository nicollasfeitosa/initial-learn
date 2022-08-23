// Script jQuery

$(document).ready(function (){
    // $('#titulo').html('jQuery - Curso Nicollas Feitosa')
    // $('#desc').html('Curso desenvolvido por Nicollas Feitosa')

    //$('header').hide()
    //$('header').html('<h1>Texto.. </h1>')

    // Exemplo
    // $('#titulo').hide()
    // $('h1').css('color', 'tomato')

    // Capturando Eventos - Click
    // $('button').click(function(){
    //     $(this).css('color', 'tomato') // this referencia o próprio elemento
    // });

    // Seletores
    // var texto = $('#bird').html();
    
    // $('#bird').html(texto + 'Animais Aquáticos'); // ID

    // $('.tangerina').css('color', 'orange'); // Classe
    // $('.tangerina:first').css('color', 'grey'); // Classe
    // $('.tangerina:last').css('color', 'grey'); // Classe

    // $('div').html("Selector Div"); // Tag

    // Eventos

    // mouse
    // $('#click').click(function (){
    //     $(this).html('OK');
    //     $(this).css('color', 'tomato');
    // });

    // $('#dblclick').dblclick(function (){
    //     $(this).html('OK');
    //     $(this).css('color', 'tomato');
    // });

    // $('#mouseenter').mouseenter(function (){
    //     $(this).html('OK');
    //     $(this).css('color', 'tomato');
    // });

    // $('#mouseleave').mouseleave(function (){
    //     $(this).html('OK');
    //     $(this).css('color', 'tomato');
    // });

    // //keyboard events
    // $('#keypress').keypress(function (){
    //     $('#eventKey').html('Keypress '+ $(this).val());
    //     $('#eventKey').css('color', 'tomato');
    // });

    // $('#keydown').keydown(function (){
    //     $('#eventKey').html('Keypress '+ $(this).val());
    //     $('#eventKey').css('color', 'tomato');
    // });

    // $('#keyup').keyup(function (){
    //     $('#eventKey').html('Keypress '+ $(this).val());
    //     $('#eventKey').css('color', 'tomato');
    // });

    // Classes

    $('#titulo').html('jQuery - Curso Nicollas Feitosa')
    $('#desc').html('Curso desenvolvido por Nicollas Feitosa')

    $('#header').addClass('header btn btn-info')
    $('#header').removeClass('btn btn-info')

    $('#header').css('height','60px')
    $('#header').css('padding','10px')
    $('#titulo').css('margin-top','0')
    $('#titulo').css('margin-bottom','0')
    $('#desc').css('margin-top','0')
    $('main').css('padding', '20px')


    // append
    // $('main').prepend("<h3>Teste H3<h3>") // Adiciona por Primeiro
    // $('main').append("<h3 id='teste'>Teste Animate H3<h3>") // Adiciona por Ultimo
    
    // $('main').append("<button id='showbtn'>Show</button>")
    // $('main').append("<button id='hidebtn'>Hide</button>")
    // $('main').append("<button id='togglebtn'>Toggle</button>")

    // $('#showbtn').click(function () {
    //     $('#teste').show();
    // })

    // $('#hidebtn').click(function () {
    //     $('#teste').hide();
    // })

    // $('#togglebtn').click(function () {
    //     $('#teste').toggle();
    // })

    // Animações

    // $('main').append("<h3 id='teste'>Teste Animate H3<h3>") // Adiciona por Ultimo
    // $('main').append("<button id='animatebtn'>Animar</button>")
    // $('#teste').css('border', '1px solid green');
    // $('#teste').css('width', '100px');
    // $('#teste').css('text-align', 'center');

    // $('#animatebtn').click(function () {
    //     $('#teste').animate({
    //         'font-size': '4em',       // ou  fontSize: '4em',
    //         borderWidth: '15px',
    //         width: '70%'
    //     }, 1000, function () {
    //         //função executada quando a animação estiver completada
    //         $(this).css('border-color', 'tomato')
            
    //     });
    // })

    //Slide Down, UP e Toogle

    // $('main').append("<h3 id='teste'>Teste slideDown H3<h3>") // Adiciona por Ultimo
    // $('main').append("<button id='downbtn'>SlideDown</button>")
    // $('main').append("<button id='upbtn'>SlideUp</button>")
    // $('main').append("<button id='togglebtn'>SlideToggle</button>")

    // $('#teste').css('border', '1px solid green');
    // $('#teste').css('width', '600px');
    // $('#teste').css('height', '80px');
    // $('#teste').css('text-align', 'center');

    // $('#downbtn').click(function () {
    //     $('#teste').slideDown();
    // })

    // $('#upbtn').click(function () {
    //     $('#teste').slideUp();
    // })

    // $('#togglebtn').click(function () {
    //     $('#teste').slideToggle();
    // })

    // Validação de Formulário

    $('form').submit(function() {
        
        var name = $(':input[name=name]').val();  // retorna o value
        var email = $(':input[name=email]').val();
        var tel = $(':input[name=tel]').val();
        var term = $(':input[name=term]').is(":checked"); // true ou false

        var error = "";
        $('#errors').html("");

        if (name === "") {
            error += "<p>Nome está vázio!<p>"
        }

        if (email === "") {
            error += "<p>Email está vázio!<p>"
        }

        if (tel === "") {
            error += "<p>Tel está vázio!<p>"
        }

        if (!term) {
            error += "<p>Você precisa aceitar os termos<p>"
        }

        if (error) {
            $('#errors').html(error);
            return false //cancelar o submit
        }

        return true 
    });

});