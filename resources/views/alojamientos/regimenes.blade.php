@extends('alojamientos.PlantillaAloja')

@section('ContenidoAloja')

 <div class="col-md-12 contenido-tres">
                       <h3 align="center">Cargar Regimenes</h3>
<form action="{{route('regimenes')}}" method="POST">
        {{csrf_field()}}
         <div class="form-group">
                        <label for="inputState">Confirma tu alojamiento</label>
                        <select id="alojamiento" class="form-control" name="idalojamiento">
                            <option selected>---Seleccione tus Alojamientos----</option>

                                         @foreach($alojamientos as $alojamiento)
                            <option value="{{$alojamiento -> id}}">
                                        {{$alojamiento['nombre']}}
                            </option>
                                         @endforeach

                          </select>
             </div>
    <div class="form-group">
              <label for="inputState">Descripcion</label>
              <input type="text" class="form-control" name="descripcion" placeholder="">
              <label for="inputState">Precio</label>
              <input type="int" class="form-control" name="precio" placeholder="">
  </div>
              <button type="imput" class="btn btn-primary btn-lg">Cargar Regimen</button>
  
</form>

<h3 align="center">Regimenes Cargados</h3>
<table class="table" name="">
  <thead class="thead-dark">
    
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Alojamiento</th>
      <th scope="col">Tipo de Regimen</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($regimenes as $regimen)
      <th> {{$regimen['id']}}</th>
      <td> {{$regimen['idalojamiento']}}</td>
      <td> {{$regimen['descripcion']}}</td>
      <td> {{$regimen['precio']}}</td>
      
    </tr>
      @endforeach
  </tbody>
</table>
       </div>
@endsection