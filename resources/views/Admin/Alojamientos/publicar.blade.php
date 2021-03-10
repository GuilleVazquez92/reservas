@extends('Admin.index')

@section('contenido')
<div class="col-md-12 contenido-dos">
                    
            <h3 align="center">Publicar Alojamiento</h3>
      <form action="{{route('publicarAlojamiento')}}" method="POST">
        {{csrf_field()}}
    <div class="form-group">
                <div class="form-group">
    <label for="inputState">Seleccionar Alojamiento</label>
    <select name="idalojamiento" class="form-control" >
                            <option selected value="{{null}}">---Selecciona la Alojamiento----</option>

                                         @foreach($alojamientos as $aloja)
                            <option value="{{$aloja -> id}}">
                                        {{$aloja['nombre']}}
                            </option>
                                         @endforeach

                          </select>
      @if ($errors->has('idalojamiento'))
            <small class="form-text text-danger">{{ $errors->first('idalojamiento') }}</small>
     @endif
  </div>
 
     <div class="form-group">
    <label for="inputState">Habitaciones</label>
    <select name="idhabitacion" class="form-control" >
                            <option selected value="{{null}}">---Selecciona la habitación----</option>

                                         @foreach($habitaciones as $habi)
                            <option value="{{$habi -> id}}">
                                        {{$habi['descripcion']}}
                            </option>
                                         @endforeach

                          </select>
       @if ($errors->has('idhabitacion'))
            <small class="form-text text-danger">{{ $errors->first('idhabitacion') }}</small>
     @endif
  </div>
 
    <div class="form-group">
    <label for="inputState">Regimenes</label>
    <select name="idregimen" class="form-control" >
                            <option selected value="{{null}}">---Regimen----</option>

                                         @foreach($regimenes as $regi)
                            <option value="{{$regi -> id}}">
                                        {{$regi['descripcion']}}
                            </option>
                                         @endforeach

                          </select>

       @if ($errors->has('idregimen'))
            <small class="form-text text-danger">{{ $errors->first('idregimen') }}</small>
     @endif 
  </div>

    <div class="content">
 
        
                <div class="col-md-4 col-md-offset-4">
 
                    
                        <div class="form-group">
                            <label for="date">Fecha de Inicio</label>
                            <div class="input-group">
                                <input type="date" class="form-control datepicker" name="fecha_inicio">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                                 @if ($errors->has('fecha_inicio'))
            <small class="form-text text-danger">{{ $errors->first('fecha_inicio') }}</small>
     @endif
                            </div>
                             <label for="date">Fecha de fin</label>
                            <div class="input-group">
                                <input type="date" class="form-control datepicker" name="fecha_fin">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>

                                         @if ($errors->has('fecha_fin'))
            <small class="form-text text-danger">{{ $errors->first('fecha_fin') }}</small>
     @endif             
                            </div>
                        </div>
 
                </div>
            </div>
    



  </div>
  


  <button  type="submit" class="btn  btn-success">Publicar</button>
  
</form>





                </div>

@endsection