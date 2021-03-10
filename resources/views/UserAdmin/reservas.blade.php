@extends('UserAdmin.index')

@section('contenido')
<div class="col-md-12 contenido-dos">
<h3 align="center">MIS RESERVAS</h3>
			
							

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
							      <th scope="col">Estado</th>
							      <th scope="col">Cancelar</th>
							      
							    </tr>
							  </thead>
							  <tbody>
							  	
							    <tr>

							      @foreach($reserva as $key => $rese)		
							      
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
							      <td> USD {{$rese->precio_total}} </td>
							      
							      	
							      	
															
							      @if($rese->bandera == 0)		
							      <th> <button type="submit" class="btn btn-danger " >Pendiente</button></th>
							      <form action="{{route('cancelarAlojamiento')}}">
							       
		<td><button type="button" class="btn bg-gradient-danger" data-toggle="modal" data-target="#modal-sm"><i class="fas fa-trash-alt"></i></button></td>
<div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Cancelación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Seguro que desea cancelar su Reserva</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
              <button type="submit" class="btn btn-danger">Cancelar</button>
            </div>
          </div>
        </div>
      </div>

							       <input type="hidden" value="{{3}}" name="estado">
							       <input type="hidden" value="{{$rese->id}}" name="id">
							       </form>

							   	 @elseif($rese->bandera == 3)
							   	 	<th> <button type="submit" class="btn btn-danger " >Cancelado</button></th>
							      @else
							      <th> <button type="submit" class="btn btn-success " >Pagado</button></th>
							      @endif
							      		
							     
							      <td></td>
							      <td></td>
							    </tr>
							     @endforeach

      
							       
							  </tbody>
							</table>
</div>

@endsection