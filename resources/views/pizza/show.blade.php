@extends('layout')

@section('content')
    <div class="col-12 text-right mb-2">
        <a href="{{ route('pizza.list') }}" class="btn btn-success btn-sm">Volver al listado</a>
    </div>
    <div class="col-12">
        <div class="card mt-5">
            <div class="card-header">
                Ver pizza {{$pizza->nombre}}
            </div>
            <div class="card-body">
                <p>Nombre: <strong>{{ $pizza->nombre }}</strong></p>
                <p>Ingredientes: </p>
                <ul>
                    @foreach($pizza->ingredientes()->get() as $ingrediente)
                        <li>{{$ingrediente->nombre}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
