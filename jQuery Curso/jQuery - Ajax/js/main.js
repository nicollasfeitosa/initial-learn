$(function() { // Document.Ready

    $('#AjaxRequest').submit(function (){

        var form = $(this).serialize(); // Recupera todos os dados do formulara (Serializada como se fosse um GET)\
        
        //var formArray = $(this).serializeArray(); // Recupera todos os dados (Em formato de Array ou Objeto)

        // console.log(form)
        // console.log(formArray)

        var request = $.ajax({
            method: "POST",
            url: "post.php",
            data: form,
            dataType: "json"
        });

        request.done(function (e) { // Quando a requisição tiver sucesso
            $('#msg').html(e.msg);

            if (e.status) {
                $('#AjaxRequest').each(function (){
                    this.reset();
                })
            }
            // for(var k in e){
            //     $(':input[name='+k+']').val(e[k])
            // }
        }); 

        request.fail(function (e) { // Quando a requisição tiver erros
            console.log("Fail");
            console.log(e);
        }); 

        request.always(function (e) { // Sempre traz o resultado até os erros
            console.log("Sempre");
            console.log(e);
        }); 

        return false;
    });

});