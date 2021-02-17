@extends('Admin.index')


@section('contenido')
<section class="content">
      <div class="container-fluid">
<h3 align="center">Mis Alojamientos</h3>
<table class="table" name="">
  <thead class="thead-dark">
    
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Alojamiento</th>
      <th scope="col">Descripcion</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($alojamiento as $alojas)
      <th> {{$alojas['id']}}</th>
      <td> {{$alojas['nombre']}}</td>
      <td> {{$alojas['descripcion']}}</td>
      <td>
      	<p>	<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" ><i class="far fa-edit"></i>
   
                </button>
      		<button class="btn bg-gradient-danger "><i class="fas fa-trash-alt"></i></button> 
      		
      	</p>
      	
      </td>
      
    </tr>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Editar Alojamiento</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               
    
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach
  </tbody>
</table>
</div>

            <!-- /.card -->
          </section>
@endsection