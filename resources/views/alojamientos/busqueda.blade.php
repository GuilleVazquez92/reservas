@extends('alojamientos.index')

@section('alojamiento')
           
	<div class="tm-section tm-bg-img" id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
							 <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
			
							<table class="table" name="">
							  <thead class="thead-dark">
							    
							    <tr>
							      <th scope="col"></th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							      <th scope="col">Fotos</th>
							      <th scope="col">Nombre</th>
							      <th scope="col">Tipo de habitacion</th> 
							      <th scope="col">Cantidad de Camas</th>
							      <th scope="col">Regimen</th>
							      <th scope="col">Precio</th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							  	<form action="{{route('otro')}}" method="POST">
        							{{csrf_field()}}
							    <tr>
							      @foreach($publicados as $key => $publi)		
							      <th> </th>
							      <td></td>
							      <td></td>
							      <td></td>
							      @foreach($fotos as $foto)
							      @if($foto->idalojamiento == $publi->alojamiento->id)
							      @if($foto->orden == 1)
							      
							      <td><img src="{{$foto['codigo_imagen']}}" alt="" style=" width: 100px; height: 100px;" > 
							      <br>		
							      <a href="">Ver mas fotos</a>	
							      </td>
							      @endif
							      @endif
							      @endforeach
							      <td> {{$publi->alojamiento->nombre}}</td>
							      <td> {{$publi->habitacion->tipoHabitacion->descripcion}}</td>
							      <td> {{$publi->habitacion->cant_camas}}</td>
							      <td> {{$publi->regimen->tipoRegimen->descripcion}}</td>
							      <?php
							      $precio = 0;
							      $precio = $publi->regimen->precio + $publi->habitacion->precio;
							      $total = $precio * $fecha;
							      $press[] = $precio * $fecha;
							     
							      ?>
							      
							     
							      <td> {{$total}} <br>{{$precio}} p/noche</td>
							      
							      	 <input type="hidden" value="{{$total}}" name="precio">
							      	 
								  
					
							      <th> <button type="submit" class="btn btn-primary " >Reservar</button></th>
							      
							      <td></td>
							      <td></td>
							      <td></td>
							    </tr>
							      @endforeach

							      @foreach($press as $p)
							      {{$p}}	
							      @endforeach 
							  </tbody>
							</table>

</form>
	</div>
				</div>

						</div>
								</div>
										</div>
@endsection            


            