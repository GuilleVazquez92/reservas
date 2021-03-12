@extends('Admin.index')

@section('contenido')
 <div class="col-md-12 contenido-tres">
                       <h3 align="center">Cargar Regimenes</h3>
<form action="{{route('regimenes')}}" method="POST">
        {{csrf_field()}}
      
    <div class="form-group ">
                 <label for="inputState">Tipo de Regimenes</label>
    <select name="idtiporegimen" class="form-control" >
                            <option selected value="{{null}}">---Seleccione tipo de Regimen----</option>

                                         @foreach($tipo_regimenes as $tipoRegi)
                            <option value="{{$tipoRegi -> id}}">
                                        {{$tipoRegi['descripcion']}}
                            </option>
                                         @endforeach

                          </select>
              @if ($errors->has('idtiporegimen'))
            <small class="form-text text-danger">{{ $errors->first('idtiporegimen') }}</small>
     @endif
              <label for="inputState">Descripcion</label>
              <input type="text" class="form-control" name="descripcion" placeholder="">
              @if ($errors->has('descripcion'))
            <small class="form-text text-danger">{{ $errors->first('descripcion') }}</small>
     @endif
              <label for="inputState">Precio</label>
              <input type="int" class="form-control" name="precio" placeholder="">
              @if ($errors->has('precio'))
            <small class="form-text text-danger">{{ $errors->first('precio') }}</small>
     @endif
              </div>

    <button type="submit" class="btn btn-primary btn-lg">Cargar Regimen</button>
  
              
  
</form>
 
<h3 align="center">Regimenes Cargados</h3>
<table class="table" name="">
  <thead class="thead-dark">
    
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Tipo</th>
      <th scope="col">Tipo de Regimen</th>
      <th scope="col">Precio</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($regimenes as $regimen)
      @if($regimen->iduser == $prueba)
      <th> {{$regimen['id']}}</th>
      <td> {{$regimen['idtipo']}}</td>
      <td> {{$regimen['descripcion']}}</td>
      <td> {{$regimen['precio']}}</td>
      <td>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" ><i class="far fa-edit"></i> </button>
        <button class="btn bg-gradient-danger "><i class="fas fa-trash-alt"></i></button>
      </td>
      
    </tr>
      @endif
      @endforeach
  </tbody>
</table>
       </div>
       </div>
@endsection