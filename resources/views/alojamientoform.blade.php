@extends('Plantilla')


@section('seccion')
<div col-md-12>
  <br>
</div>
<h1 align="center" id="alojamiento">Registrar Alojamiento</h1>
<div col-md-12>
  <br>
</div>
<form>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Ciudad</label>
      <select id="ciudad" class="form-control">
        <option selected>Ciudades</option>
        
        @foreach($ciudades as $ciudad)
        <option value="{{$ciudad['id']}}">
          {{$ciudad['descripcion']}}
        </option>
        @endforeach
        
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Departamento</label>
      <select id="departamento" class="form-control">
        <option selected>Departamentos</option>
        @foreach($departamentos as $dpto)
        <option value="{{$dpto['id']}}">
          {{$dpto['descripcion']}}
        </option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputAddress">Direccion</label>
      <input type="text" class="form-control" id="direccion" placeholder="">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Pais</label>
      <select id="pais" class="form-control">
        <option selected>Paises</option>
        @foreach($paises as $pais)
        <option value="{{$pais['id']}}">
          {{$pais['descripcion']}}
        </option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Correo</label>
      <input type="email" class="form-control" id="correo" placeholder="Correo">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Telefono</label>
      <input type="text" class="form-control" id="telefono" placeholder="Telefono">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Celular</label>
      <input type="text" class="form-control" id="celular" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" placeholder="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Tipo de Alojamiento</label>
      <select id="tipoaloja" class="form-control">
        
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
    <select id="categoria" class="form-control">
      <option selected>---Elegir Categoria---</option>
      <option>No soy un hotel</option>
      <option>5 estrellas</option>
      <option>4 estrellas</option>
      <option>3 estrellas</option>
      <option>2 estrellas</option>
      <option>1 estrella</option>
    </select>
  </div>
  
</div>
<div class="form-group">
</div>
<button type="button" class="btn btn-primary ">Cargar</button>

</form>
@endsection