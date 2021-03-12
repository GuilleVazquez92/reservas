@extends('UserAdmin.index')

@section('contenido')
<div class="col-md-12 contenido-dos">
<h3 align="center">MIS RESERVAS</h3>
			
							

							<table class="table" name="">
							  <thead class="thead-dark">
							    
							    <tr>
							      <th scope="col"></th>
							      
							     
							      <th scope="col">Nº Vuelo</th>
							      <th scope="col">IDA-De</th> 
							      <th scope="col">IDA-A</th>
							      <th scope="col">VUELTA-De</th> 
							      <th scope="col">VUELTA-A</th>
							      <th scope="col">Precio</th>
							       <th scope="col"></th>
							      
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							  	@if(empty($vuelos))

							    <tr>
							    @else

							      @foreach($vuelos as $key => $vuelo)		
							      
							      <th> </th>
							      
							      
							      
							      <td> {{$vuelo->id}}</td>
							      <td> {{$vuelo->ReservaVuelo->salida}}</td>
							      <td> {{$vuelo->ReservaVuelo->llegada}}</td>
							      <td> {{$vuelo->ReservaVuelo->llegada}}</td>
							      <td> {{$vuelo->ReservaVuelo->salida}}</td>	
							      <td> USD {{$vuelo->precio_total}} </td>
							      
							      <td> <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#modal-sm">Detalle</button></td>
							<div class="modal fade" id="modal-sm">
							        <div class="modal-dialog modal-sm">
							          <div class="modal-content">
							            <div class="modal-header">
							              <h4 class="modal-title">Detalle - Vuelo</h4>
							              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                <span aria-hidden="true">&times;</span>
							              </button>
							            </div>
							            <div class="modal-body">
							              <p><b><u>IDA</u> </b></p>
							              	<p><b>DESDE:</b> {{$vuelo->ReservaVuelo->salida}} - <b>HASTA:</b> {{$vuelo->ReservaVuelo->llegada}}</p>
							              	<p><b>FECHA:</b>{{$vuelo->ReservaVuelo->fecha_salida}}- <b>HORARIO:</b>{{$vuelo->ReservaVuelo->horario_salida}}</p>
							              	<p><b><u>VUELTA</u> </b></p>
							              	<p><b>DESDE:</b> {{$vuelo->ReservaVuelo->llegada}} - <b>HASTA:</b> {{$vuelo->ReservaVuelo->salida}}</p>
							              	<p><b>FECHA:</b>{{$vuelo->ReservaVuelo->fecha_llegada}}- <b>HORARIO:</b>{{$vuelo->ReservaVuelo->horario_llegada}}</p>
							              	<p><b><u>TIEMPO ESTIMADO:</u> </b>{{$vuelo->ReservaVuelo->tiempo_salida}} </p>
							            </div>
							            <div class="modal-footer justify-content-between">
							              <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
							              <button type="submit" class="btn btn-danger">Cancelar</button>
							            </div>
							          </div>
							        </div>
							      </div>
  							</td>	
							      	
															
							      @if($vuelo->bandera == 0)	
							      
							      <form action="{{route('mostrarPagoVuelo')}}" method="post">
        							{{csrf_field()}}

        						<input type="hidden" value="{{$vuelo->precio_total}} " name="precio">
        						<input type="hidden" value="{{$vuelo->id}}" name="id">	
							      <th> <button type="submit" class="btn btn-danger " >Pendiente</button><button type="submit" class="btn btn-success " >Pagar </button></th>

							      @else
							      <th> <button type="submit" class="btn btn-success " >Pagado</button></th>
							      @endif
							      </form>		
							      <td></td>
							      <td></td>
							      <td></td>
							    </tr>
							     @endforeach
							     @endif
							       
							  </tbody>
							</table>
</div>

@endsection