<!-- Modal Editar -->
<div class="modal fade" id="edit{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR PRODUCTO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('productos.update',$producto->id)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="modal-body">


        <div class="row">
                <div class="col">
                <label for="" class="form-label">Categoria</label>
                
<select class="form-select " name="idcategoria" id="" aria-label=".form-select-sm example" required>


  <option selected disabled value="">Categorias:</option>
  @foreach ($categorias as $categoria)
  @if($categoria->id == $producto->idcategoria)
  <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
  @else
  <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
  @endif
  @endforeach
</select>
                 
                </div>
                <div class="col">
                <label for="" class="form-label">Nombre</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{$producto->nombre}}" aria-label="Nombre" required>
                </div>
              </div>

              
            <div class="row">
              
                <div class="col">
                    <label for="" class="form-label">Cantidad</label>
                  <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" value="{{$producto->cantidad}}" aria-label="Cantidad" required>
                </div>
                <div class="col">
                <label for="" class="form-label">Precio</label>
                  <input type="text" name="precio" class="form-control" placeholder="Precio" value="{{$producto->precio}}" aria-label="Precio" required>
                </div>
              </div>


        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>

      </div>
    </form>
    </div>
  </div>

  <!-- Modal Eliminar -->
<div class="modal fade" id="delete{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR PRODUCTO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('productos.destroy',$producto->id)}}" method="POST">
            @csrf
            @method('DELETE')
        <div class="modal-body">

            Estas seguro de eliminar a <strong>{{$producto->nombre}}</strong>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>

      </div>
    </form>
    </div>
  </div>
