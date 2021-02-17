@extends('alojamientos.index')

@section('alojamiento')
           

			<h3 align="center" style="color: red;">PAGO</h3>
			
							

							<table class="table" name="">
							  <thead class="thead-dark">
							    
							    <tr>
							      <th scope="col"></th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							     
							      <th scope="col">Nombre</th>
							      <th scope="col">Tipo de habitacion</th> 
							      <th scope="col">Cantidad de Camas</th>
							      <th scope="col">Regimen</th>
							      <th scope="col">Desde</th>
							      <th scope="col">Hasta</th>
							      <th scope="col">Precio</th>
							      
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							  	
							    <tr>

							      @foreach($publicados as $key => $publi)		
							      
							      <th> </th>
							      <td></td>
							      <td></td>
							      <td></td>
							      
							      
							      <td> {{$publi->alojamiento->nombre}}</td>
							      <td> {{$publi->habitacion->tipoHabitacion->descripcion}}</td>
							      <td> {{$publi->habitacion->cant_camas}}</td>
							      <td> {{$publi->regimen->tipoRegimen->descripcion}}</td>
							      <td> {{$desde}}</td>
							      <td> {{$hasta}}</td>

							      <form action="{{route('mostrarPago')}}" method="post">
        							{{csrf_field()}}	
							      <td> USD {{$precio}} </td>
							      
							      	 <input type="hidden" value="{{$precio}}" name="precio">
							      	
															  
					
							      <th> <button type="submit" class="btn btn-primary " >Pagar</button></th>
							      </form>		
							      <td></td>
							      <td></td>
							      <td></td>
							    </tr>
							     @endforeach

							       
							  </tbody>
							</table>


	
@endsection            


            