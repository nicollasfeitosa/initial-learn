@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tarefa</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status1" value=1 checked />
                    <label class="form-check-label" for="status1">
                        Aberta
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status2" value=0>
                    <label class="form-check-label" for="status2">
                        Concluída
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
        </div>
    </div>
</div>
@endsection
