<?php 

    require_once '../conn.php';
    require_once '../tarefa.model.php';
    require_once '../tarefa.service.php';

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if ($acao == 'inserir') {
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);
    
        $conn = new Conn();
        
        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefaService->inserir();
    
        header('Location: nova_tarefa.php?inclusao=1');
        exit;

    } else if ($acao === 'recuperar') {
        $tarefa = new Tarefa();
        $conn = new Conn();

        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefas = $tarefaService->recuperar(); // Retorna $stmt->fetchAll(PDO::FETCH_OBJ);

    } else if ($acao == 'atualizar'){
        
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id'])
               ->__set('tarefa', $_POST['tarefa']);

        // $tarefa->__set('id', $_POST['id']);
        // $tarefa->__set('tarefa', $_POST['tarefa']);

        $conn = new Conn();

        $tarefaService = new TarefaService($conn, $tarefa);

        if ($tarefaService->atualizar()) { // Retorna 1 ou N para numero de registros atualizados
            header('location: todas_tarefas.php');
            exit;
        }
    } else if ($acao == 'remover') {
        
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);

        $conn = new Conn();
        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefaService->remover();

        header('location: todas_tarefas.php');
        exit;

    } else if ($acao == 'marcarRealizada') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id'])->__set('id_status', 2);

        $conn = new Conn();
        $tarefaService = new TarefaService($conn, $tarefa);

        $tarefaService->marcarRealizada();    
        
        header('location: todas_tarefas.php');
        exit;

    } else if ($acao == "pendencias") {
        $tarefa = new Tarefa();
        $tarefa->__set('id_status', 1);
        $conn = new Conn();

        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefas = $tarefaService->recuperarPendencias(); // Retorna $stmt->fetchAll(PDO::FETCH_OBJ);

    } else if ($acao == "pesquisar") {
        $tarefa = new Tarefa();
        $conn = new Conn();

        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefas = $tarefaService->pesquisar($termo);
    }

?>