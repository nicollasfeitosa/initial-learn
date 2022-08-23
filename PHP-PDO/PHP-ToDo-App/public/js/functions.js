function editar(id, txt_tarefa) {
    // criar um form de edição
    let form = document.createElement('form')
    form.action = 'tarefa_controller.php?acao=atualizar'
    form.method = 'post'
    form.className = 'row'

    // criar input text
    let inputTarefa = document.createElement('input')
    inputTarefa.type = 'text'
    inputTarefa.name = 'tarefa'
    inputTarefa.className = 'col-9 form-control'
    inputTarefa.value = txt_tarefa;

    // criar um input hidden para guardar o id da tarefa
    let inputID = document.createElement('input')
    inputID.type = 'hidden'
    inputID.name = 'id'
    inputID.value = id

    // criar button
    let button = document.createElement('button')
    button.type = 'submit'
    button.name = 'enviar'
    button.className = 'col-3 btn btn-info'
    button.innerHTML = 'Atualizar'

    // incluir inputTarefa no form
    form.appendChild(inputTarefa)

    // incluir inputID no form
    form.appendChild(inputID)

    // incluir button no form
    form.appendChild(button)

    // selecionar a div tarefa
    let tarefa = document.getElementById('tarefa_'+id);

    // limpar o texto da tarefa para inclusão do form
    tarefa.innerHTML = ''

    // incluir form na página
    tarefa.insertBefore(form, tarefa[0])

}

function remover(id){
    location.href = 'todas_tarefas.php?acao=remover&id='+id;
}

function marcarRealizada(id){
    location.href = 'todas_tarefas.php?acao=marcarRealizada&id='+id;
}