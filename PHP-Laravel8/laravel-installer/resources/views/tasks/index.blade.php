@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Listagem de Tarefas <a href="{{ route('tasks.create') }}" class="btn btn-sm btn-primary">Novo</a></h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->status ? 'Aberta' : 'Concluída'  }}</td>
                        <td>
                            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="btn btn-sm btn-primary">Ver</a>
                            <a
                                href="{{ route('tasks.edit', ['task' => $task->id]) }}"
                                class="btn btn-sm btn-primary">
                                Editar
                            </a>
                            <form
                                style="display: inline;"
                                action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{--
        <div class="col-md-12">
            {{ $tasks->links() }}
        </div>
        --}}
    </div>
</div>
@endsection