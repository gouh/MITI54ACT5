@extends('layout')

@section('content')
    <div class="col-12 text-right mb-2">
        <a href="{{ route('pizza.create.view') }}" class="btn btn-success btn-sm">Agregar nueva pizza</a>
    </div>
    <div class="col-12">
        <table class="table table-hover">
            <thead>
            <tr class="table-primary">
                <td># ID</td>
                <td>Nombre</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($pizzas as $pizza)
                <tr>
                    <td>{{$pizza->pizza_id}}</td>
                    <td>{{$pizza->nombre}}</td>
                    <td class="text-center">
                        <a href="{{ route('pizza.edit.view', $pizza->pizza_id)  }}" class="btn btn-info btn-sm">Editar</a>
                        <a href="{{ route('pizza.show.view', $pizza->pizza_id)  }}" class="btn btn-warning btn-sm">Ver</a>
                        <form action="{{ route('pizza.delete', $pizza->pizza_id)  }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection()
