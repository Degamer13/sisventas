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
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th >ACCIONES</th>
            </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($categorias as $categoria)



            <tr >
                <td scope="row">{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$categoria->id}}">
                    Editar
                  </button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$categoria->id}}">
                     Eliminar
                 </button>

                </td>

            </tr>


         @include('categorias.info')
        @endforeach
    </tbody>
    </table>
</div>

@include('categorias.create')


@endsection
