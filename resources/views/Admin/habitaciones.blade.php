@extends('Admin.index')


@section('contenido')
<div class="col-md-12 contenido-dos">
                    
            <h3 align="center">Cargar Habitaciones</h3>
      <form action="{{route('habitaciones')}}" method="POST">
        {{csrf_field()}}
    <div class="form-group">
     <div class="form-group">
    <label for="inputState">Tipo de Habitaciones</label>
    <select name="idtipohabitacion" class="form-control" >
                            <option selected value="{{null}}">---Seleccione tipo de habitación----</option>

                                         @foreach($tipo_habitacion as $tipoHabi)
                            <option value="{{$tipoHabi -> id}}">
                                        {{$tipoHabi['descripcion']}}
                            </option>
                                         @endforeach

                          </select>
      @if ($errors->has('idtipohabitacion'))
            <small class="form-text text-danger">{{ $errors->first('idtipohabitacion') }}</small>
     @endif
  </div>
 
  <div class="form-group">
    <label for="inputState">Cantidad de camas </label>
    <select class="form-control" name="cant_camas">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
    </select>
    @if ($errors->has('cant_camas'))
            <small class="form-text text-danger">{{ $errors->first('cant_camas') }}</small>
     @endif
  </div>
  <label for="inputState">Descripción</label>
    <input type="int" class="form-control" name="descripcion" placeholder="">
    @if ($errors->has('descripcion'))
            <small class="form-text text-danger">{{ $errors->first('descripcion') }}</small>
     @endif
  
  <label for="inputState">Precio</label>
    <input type="int" class="form-control" name="precio" placeholder="">
     @if ($errors->has('precio'))
            <small class="form-text text-danger">{{ $errors->first('precio') }}</small>
     @endif
  </div>
  
  <button type="submit" class="btn btn-primary btn-lg">Cargar Habitación</button>
  
</form>

<h3 align="center">Habitaciones Cargadas</h3>
<table class="table" name="">
  <thead class="thead-dark">
    
    <tr>
            <th scope="col">Descripción</th>
      <th scope="col">Tipo de habitación</th>
      <th scope="col">Cantidad de Camas</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($habitaciones as $habitacion)
      @if($habitacion->idusers == $prueb)
      
      <td> {{$habitacion['descripcion']}}</td>
      <td> {{$habitacion['idtipo']}}</td>
      <td> {{$habitacion['cant_camas']}}</td>
      <td> {{$habitacion['precio']}}</td>
      
    </tr>
      @endif
      @endforeach
  </tbody>
</table>

</div>
                </div>
@endsection