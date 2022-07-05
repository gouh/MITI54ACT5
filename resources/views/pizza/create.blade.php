@extends('layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            Crear nueva pizza
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('pizza.create') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required/>
                </div>
                <div class="form-group">
                    @foreach($ingredientes as $ingrediente)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="ingrediente[]"
                                   value="{{$ingrediente->ingrediente_id}}" id="chk{{$ingrediente->ingrediente_id}}">
                            <label class="form-check-label"
                                   for="chk{{$ingrediente->ingrediente_id}}">{{$ingrediente->nombre}}</label>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-block btn-primary">Crear</button>
            </form>
        </div>
    </div>
@endsection
