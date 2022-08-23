@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            @guest

            <h1>Você não está logado para ver essas informações!</h1>

            @else

            <h2>Usuario <strong>{{ $user->name }}</strong></h2>
            <p>Dados do usuario</p>
            <ul>
                <li>Nome: {{ $user->name }}</li>
                <li>Email: {{ $user->email }}</li>
            </ul>


            @endguest

        </div>
    </div>
</div>
@endsection
