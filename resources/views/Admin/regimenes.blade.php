@extends('Admin.index')

@section('contenido')
 <div class="col-md-12 contenido-tres">
                       <h3 align="center">Cargar Regimenes</h3>
<form action="{{route('regimenes')}}" method="POST">
        {{csrf_field()}}
      
    <div class="form-group ">
                 <label for="inputState">Tipo de Regimenes</label>
    <select name="idtiporegimen" class="form-control" >
                            <option selected>---Seleccione tipo de Regimen----</option>

                                         @foreach($tipo_regimenes as $tipoRegi)
                            <option value="{{$tipoRegi -> id}}">
                                        {{$tipoRegi['descripcion']}}
                            </option>
                                         @endforeach

                          </select>
 
              <label for="inputState">Descripcion</label>
              <input type="text" class="form-control" name="descripcion" placeholder="">
              <label for="inputState">Precio</label>
              <input type="int" class="form-control" name="precio" placeholder="">
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
      
    </tr>
      @endif
      @endforeach
  </tbody>
</table>
       </div>
       </div>
@endsection