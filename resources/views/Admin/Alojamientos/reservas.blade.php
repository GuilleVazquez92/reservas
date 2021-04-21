@extends('Admin.index')

@section('contenido')
<div class="col-md-12 contenido-dos">
<h3 align="center">RESERVAS REALIZADAS</h3>
			
							

							<table class="table" name="">
							  <thead class="thead-dark">
							    
							    <tr>
							      <th scope="col">Alojamiento</th>
							      <th scope="col">Tipo de habitación</th> 
							      <th scope="col">Cantidad de Camas</th>
							      <th scope="col">Régimen</th>
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
							      	
							      	
															
							      @if($rese->bandera == 0 ||$rese->bandera == 4)    
                    <th> <span class="badge badge-warning">Pendiente</span></th>
                    @elseif($rese->bandera == 1)
                    <th> <span class="badge badge-success">Pagado</span></th>
                    @elseif($rese->bandera == 3)
                    <th> <span class="badge badge-danger">Cancelado</span></th>

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