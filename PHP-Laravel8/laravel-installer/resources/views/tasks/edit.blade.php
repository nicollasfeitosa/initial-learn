@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Tarefa</label>
                    <input class="form-control" id="name" name="name" value="{{ $task->name }}" />
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status2" value=0 {{ $task->status == 0 ? 'checked' : '' }}>
                        <label class="form-check-label" for="status2">
                            Aberta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status1" value=1 {{ $task->status ? 'checked' : '' }} />
                        <label class="form-check-label" for="status1">
                            Concluída
                        </label>
                    </div>
                </div>

                <button style="display: inline;" type="submit" class="btn btn-sm btn-success">Atualizar</button>
            </form>
        </div>
        <div class="col-md-12">
            <a style="display: inline;" href="{{ route('tasks.index') }}" class="mr-3 btn btn-sm btn-secondary">Voltar</a>
            <form style="display: inline-block;" action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="mr-3 btn btn-sm btn-danger">deletar</button>
            </form>
        </div>
    </div>
</div>
@endsection