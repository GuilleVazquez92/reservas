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
      <th scope="col">Descripción</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($alojamientos as $alojas)
      <th> {{$alojas['id']}}</th>
      <td> {{$alojas['nombre']}}</td>
      <td> {{$alojas['descripcion']}}</td>
      <td>
        <form action="{{route('editAlojamiento')}}" >
          <p>
          <input type="hidden" value="{{$alojas['id']}}" name="id">
      		<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" ><i class="far fa-edit"></i> </button>
        </form>

        <form action="{{route('eliminarAlojamiento')}}">
          <input type="hidden" value="{{$alojas['id']}}" name="id">
      	<button class="btn bg-gradient-danger "><i class="fas fa-trash-alt"></i></button> 
      		</form>
      	</p>
      	
      </td>
      
    </tr>
      @endforeach
  </tbody>
</table>
</div>

            <!-- /.card -->
          </section>
@endsection