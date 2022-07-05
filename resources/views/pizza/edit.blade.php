@extends('layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            Editar pizza {{$pizza->nombre}}
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('pizza.update', $pizza->pizza_id) }}">
                @method('patch')
                <div class="form-group">
                    @csrf
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{$pizza->nombre}}" required/>
                </div>
                <div class="form-group">
                    @foreach($ingredientes as $ingrediente)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="ingrediente[]"
                                   value="{{$ingrediente->ingrediente_id}}" id="chk{{$ingrediente->ingrediente_id}}"
                                   {{ in_array($ingrediente->ingrediente_id, $ingredientes_pizza) ? 'checked' : '' }}>
                            <label class="form-check-label"
                                   for="chk{{$ingrediente->ingrediente_id}}">{{$ingrediente->nombre}}</label>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-block btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
