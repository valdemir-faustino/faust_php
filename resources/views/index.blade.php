@extends('layouts.app')
@section('content')
    <h1>Faust_php</h1>
     <x-alert />
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($cads as $cad)
                <tr>
                    <td>{{$cad->id}}</td>
                    <td>{{$cad->email}}</td>
                    <td>
                        <a href="{{ route('edit',$cad->id)}}" class="btn btn-success btn-sm">Editar</a>
                        <a href="{{ route('show', $cad->id)}}" class="btn btn-primary btn-sm">Detalhes</a>
                        <form action="{{ route('destroy', $cad->id)}}" method="post" onsubmit="return confirm('Deseja realmente excluir esse registro ?')" class="d-inline">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm" >Apagar</button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection