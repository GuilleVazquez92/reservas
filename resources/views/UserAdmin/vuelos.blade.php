@extends('UserAdmin.index')

@section('contenido')
<div class="col-md-12 contenido-dos">
<h3 align="center">MIS RESERVAS</h3>
			
							

							<table class="table" name="">
							  <thead class="thead-dark">
							    
							    <tr>
							      <th scope="col"></th>
							      
							     
							      <th scope="col">Nº Vuelo</th>
							      <th scope="col">De</th> 
							      <th scope="col">A</th>
							      <th scope="col">Precio</th>
							      
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
							      <td> USD {{$vuelo->precio_total}} </td>
							      
							      	
							      	
															
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