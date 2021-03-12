
@extends('Admin.index')


@section('contenido')
<div class="col-md-12 contenido-dos">
                    
            <h3 align="center">Editar Habitación</h3>
      <form action="{{route('editarHabitacion')}}" method="POST">
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
    <input type="int" class="form-control" name="descripcion" placeholder="" value="{{$habitacion->descripcion}}">
    @if ($errors->has('descripcion'))
            <small class="form-text text-danger">{{ $errors->first('descripcion') }}</small>
     @endif
  
  <label for="inputState">Precio</label>
    <input type="int" class="form-control" name="precio" placeholder="" value="{{$habitacion->precio}}">
     @if ($errors->has('precio'))
            <small class="form-text text-danger">{{ $errors->first('precio') }}</small>
     @endif
  </div> 
  <input type="hidden" value="{{$habitacion->id}}" name="id">
  
  <button type="submit" class="btn btn-primary btn-lg">Editar Habitación</button>
  
</form>
</div>
                </div>
@endsection