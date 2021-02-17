@extends('Admin.index')


@section('contenido')

 <section class="content">
      <div class="container-fluid">	
 	<h3 align="center">Alojamientos Publicados</h3>

	<table class="table" name="">
 	 <thead class="thead-dark">
    
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Alojamiento</th>
      <th scope="col">Regimen</th>
      <th scope="col">Habitacion</th>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Final</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    	@foreach($publicados as $publi)
      <th> {{$publi['id']}}</th>
      <td> {{$publi->alojamiento->nombre}}</td>
      <td> {{$publi->regimen->descripcion}}</td>
      <td> {{$publi->habitacion->descripcion}}</td>
      <td> {{$publi['fecha_inicio']}}</td>
      <td> {{$publi['fecha_fin']}}</td>
      
    </tr>
      @endforeach
  </tbody>
</table>
 	<p></p>

</section>
</div>			 
@endsection