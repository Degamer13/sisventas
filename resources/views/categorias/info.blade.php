<!-- Modal Editar -->
<div class="modal fade" id="edit{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR CATEGORIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('categorias.update',$categoria->id)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="modal-body">


          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$categoria->nombre}}" placeholder="Nombre" required>

          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion" id=""  aria-describedby="helpId" placeholder="Descripción" id="" cols="10" rows="5" required>{{$categoria->descripcion}}</textarea>
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
<div class="modal fade" id="delete{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR CATEGORIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('categorias.destroy',$categoria->id)}}" method="POST">
            @csrf
            @method('DELETE')
        <div class="modal-body">

            Estas seguro de eliminar a <strong>{{$categoria->nombre}}</strong>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>

      </div>
    </form>
    </div>
  </div>
