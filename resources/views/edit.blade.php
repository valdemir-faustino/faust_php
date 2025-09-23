@extends('layouts.app')
@section('content')

    <h1>Editar novo elemento</h1>

    <form action="{{ route('update', $cad->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$cad->email}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary btn-sm">Editar</button>
        </div>
    </form>

@endsection