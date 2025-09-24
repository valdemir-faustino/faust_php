@extends('layouts.app')

@section('content')
    <x-alert />

    @isset($cad)
        <div class="container mt-4 d-flex justify-content-center">
            <div class="card border-success shadow-sm" style="max-width: 30rem;">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Detalhes do Cadastro</h4>
                </div>
                <div class="card-body">
                    <dl class="row mb-0">
                        <dt class="col-sm-4">ID</dt>
                        <dd class="col-sm-8">{{ $cad->id }}</dd>

                        <dt class="col-sm-4">Email</dt>
                        <dd class="col-sm-8">{{ $cad->email }}</dd>
                    </dl>
                </div>
                <div class="card-footer text-end bg-light">
                    <a href="{{ route('index') }}" class="btn btn-outline-success btn-sm">Voltar</a>
                </div>
            </div>
        </div>
    @endisset
@endsection
