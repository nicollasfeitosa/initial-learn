@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="mb-5">Dados da Tarefa</h2>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th scope="row">Tarefa</th>
                        <td>{{ $task->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Status</th>
                        <td>{{ $task->status ? 'Concluida' : 'Aberta'  }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <a href="{{ route('tasks.index') }}" class="btn btn-sm btn-secondary">Voltar</a>
            <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn btn-sm btn-secondary">Editar</a>
            <form style="display: inline;" action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">deletar</button>
            </form>
        </div>
    </div>
</div>
@endsection
