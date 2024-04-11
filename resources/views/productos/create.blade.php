 <!-- Modal crear -->
 <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR PRODUCTO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('productos.store')}}" method="POST">
            @csrf
        <div class="modal-body">

            <div class="row">
                <div class="col">
                <label for="" class="form-label">Categoria</label>
                
<select class="form-select " name="idcategoria" id="" aria-label=".form-select-sm example" required>


  <option selected disabled value="">Categorias:</option>
  @foreach ($categorias as $categoria)
  <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
  @endforeach
</select>
                 
                </div>
                <div class="col">
                <label for="" class="form-label">Nombre</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" required>
                </div>
              </div>

              
            <div class="row">
              
                <div class="col">
                    <label for="" class="form-label">Cantidad</label>
                  <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" aria-label="Cantidad" required>
                </div>
                <div class="col">
                <label for="" class="form-label">Precio</label>
                  <input type="text" name="precio" class="form-control" placeholder="Precio" aria-label="Precio" required>
                </div>
              </div>

         

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

      </div>
    </form>
    </div>
  </div>
