@extends('Plantilla')

@section('seccion')
<div col-md-12>
  <br>
</div>
<h1 align="center" id="alojamiento">Registrar Alojamiento</h1>
<div col-md-12>
  <br>
</div>
<form action="{{route('prueba')}}" method="POST">
	{{csrf_field()}}
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Ciudad</label>
      <select id="ciudad" class="form-control" name="idciudad">
        <option selected>Ciudades</option>
        
        @foreach($ciudades as $ciudad)
        <option value="{{$ciudad['id']}}">
          {{$ciudad['descripcion']}}
        </option>
        @endforeach
        
      </select>
    </div>

  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputAddress">Direccion</label>
      <input type="text" class="form-control" name="direccion" placeholder="">
    </div>
  
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Correo</label>
      <input type="email" class="form-control" name="correo" placeholder="Correo">
    </div>
 
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Referencia</label>
      <input type="text" class="form-control" name="referencia" placeholder="Correo">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Latitud</label>
      <input type="text" class="form-control" name="latitud" placeholder="Telefono">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Longitud</label>
      <input type="text" class="form-control" name="longitud" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" placeholder="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Tipo de Alojamiento</label>
      <select name="idtipo" class="form-control">
        
       <option selected>Tipos</option>
       @foreach($tipos as $tipo)
       <option value="{{$tipo->id}}">
        {{$tipo->tipo_alojamiento}}
      </option>
      @endforeach
      
    </select>
  </div>
  <div class="form-group col-md-6">
    <label for="inputState">Categoria</label>
    <select name="categoria" class="form-control">
      <option selected>---Elegir Categoria---</option>
      <option>No soy un hotel</option>
      <option>5</option>
      <option>4</option>
      <option>3</option>
      <option>2</option>
      <option>1</option>
    </select>
  </div>
  
</div>
<div class="form-group">
</div>
<button type="submit" class="btn btn-primary ">Cargar</button>

</form>
@endsection