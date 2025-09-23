@extends('layouts.app')
@section('content')

    <h1>Criar novo elemento</h1>

    <form action="{{ route('store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email_valido">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
        </div>
    </form>

@endsection