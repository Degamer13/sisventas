@extends('welcome')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Nuevo
  </button>
<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">NOMBRE</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th >ACCIONES</th>
            </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($productos as $producto)



            <tr >
                <td scope="row">{{$producto->id}}</td>
                <td>{{$producto->Categoria->nombre}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->precio}}</td>
                <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->id}}">
                    Editar
                  </button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$producto->id}}">
                     Eliminar
                 </button>

                </td>

            </tr>


         @include('productos.info')
        @endforeach
    </tbody>
    </table>
</div>

@include('productos.create')


@endsection
