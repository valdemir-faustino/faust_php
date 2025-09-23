@extends('layouts.app')
@section('content')

    <h1>Detalhe</h1>
    <x-alert />
      @if (isset($cad))

      Id : {{$cad->id}}<br>
      Email : {{$cad->email}}
          
      @endif
    

@endsection