@extends('layouts.app')

{{-- 
@section('css')
    <style>
        body {
            background-color: tomato;
        }
    </style>
@endsection --> 
--}} 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- 
@section('title', 'Meu titulo do blade')

@section('js')
        <script>
            alert('ola');
        </script>
@endsection
--}}