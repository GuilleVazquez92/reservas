@extends('UserAdmin.index')

@section('contenido')
<div class="col-md-12 contenido-dos">
<h3 align="center" style="color: red;">PAGO</h3>
			
							

							<table class="table" name="">
							  <thead class="thead-dark">
							    
							    <tr>
							      <th scope="col"></th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							     
							      <th scope="col">Nombre</th>
							      <th scope="col">Tipo de habitación</th> 
							      <th scope="col">Cantidad de Camas</th>
							      <th scope="col">Regimen</th>
							      <th scope="col">Entrada</th>
							      <th scope="col">Salida</th>
							      <th scope="col">Precio</th>
							      
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							  	
							    <tr>

							      @foreach($reserva as $key => $rese)		
							      
							      @if($rese->bandera == 0)
							      <th> </th>
							      <td></td>
							      <td></td>
							      <td></td>
							      
							      
							      <td> {{$rese->publicados->alojamiento->nombre}}</td>
							      <td> {{$rese->publicados->habitacion->tipoHabitacion->descripcion}}</td>
							      <td> {{$rese->publicados->habitacion->cant_camas}}</td>
							      <td> {{$rese->publicados->regimen->tipoRegimen->descripcion}}</td>
							      <td> {{parsearFechaDeVuelo($rese->fecha_entrada)}}</td>
							      <td> {{parsearFechaDeVuelo($rese->fecha_salida)}}</td>

							      <form action="{{route('mostrarPago')}}" method="post">
        							{{csrf_field()}}	
							      <td> USD {{$rese->precio_total}} </td>
							      
							      	 <input type="hidden" value="{{$rese->precio_total}} " name="precio">
							      	<input type="hidden" value="{{$rese->id}}" name="id">
															  
					
							      <th> <button type="submit" class="btn btn-primary " >Pagar</button></th>
							      </form>		
							      <td></td>
							      <td></td>
							      <td></td>
							    </tr>
							    @endif
							     @endforeach

							       
							  </tbody>
							</table>
</div>

@endsection