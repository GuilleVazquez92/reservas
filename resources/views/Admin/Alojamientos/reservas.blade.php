@extends('Admin.index')

@section('contenido')
<div class="col-md-12 contenido-dos">
<h3 align="center">RESERVAS REALIZADAS</h3>
			
							

							<table class="table" name="">
							  <thead class="thead-dark">
							    
							    <tr>
							      <th scope="col">Alojamiento</th>
							      <th scope="col">Tipo de habitacion</th> 
							      <th scope="col">Cantidad de Camas</th>
							      <th scope="col">Regimen</th>
							      <th scope="col">Entrada</th>
							      <th scope="col">Salida</th>
							      <th scope="col">Precio</th>
							      <th scope="col">Cliente</th>
							       <th scope="col">Correo</th>

							      
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							  	
							    <tr>

							      @foreach($reserva as $key => $rese)		
							      
							      <td> {{$rese->publicados->alojamiento->nombre}}</td>
							      <td> {{$rese->publicados->habitacion->tipoHabitacion->descripcion}}</td>
							      <td> {{$rese->publicados->habitacion->cant_camas}}</td>
							      <td> {{$rese->publicados->regimen->tipoRegimen->descripcion}}</td>
							      <td> {{parsearFechaDeVuelo($rese->fecha_entrada)}}</td>
							      <td> {{parsearFechaDeVuelo($rese->fecha_salida)}}</td>	
							      <td> USD {{$rese->precio_total}} </td>
							      <td> {{$rese->user->name}} </td>
							      <td> {{$rese->user->email}} </td>
							      	
							      	
															
							      @if($rese->bandera == 0)		
							      <th> <button type="submit" class="btn btn-danger " >Pendiente</button></th>
							      @else
							      <th> <button type="submit" class="btn btn-success " >Pagado</button></th>
							      @endif
							      </form>		
							      <td></td>
							      <td></td>
							      <td></td>
							    </tr>
							     @endforeach

							       
							  </tbody>
							</table>
</div>

@endsection