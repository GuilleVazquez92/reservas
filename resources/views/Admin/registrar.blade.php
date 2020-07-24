@extends('Admin.index')


@section('contenido')
<div class="col-md-12 contenido-dos">
<h1 align="center" id="prueba">Registrar Alojamiento</h1>
<form action="{{route('prueba')}}" method="POST">
  {{csrf_field()}}
  <div class="form-row">
   
   <div class="form-group col-md-6">
    <label for="inputEmail4">Nombre del alojamiento</label>
    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
  </div>
  <div class="form-group col-md-6">
    <label for="inputState">Departamento</label>
    <select id="ciudad" class="form-control" name="idciudad">
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
   <div class="form-group col-md-5">
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
 <div class="form-group col-md-7">
  <label for="inputAddress">Direccion</label>
  <input type="text" class="form-control" name="direccion" placeholder="">
</div>

</div>
<div class="form-row">

 <div class="form-group col-md-4">
  <label for="inputEmail4">Correo</label>
  <input type="email" class="form-control" name="correo" placeholder="Correo">
</div>
<div class="form-group col-md-4">
  <label for="inputEmail4">Telefono</label>
  <input type="text" class="form-control" name="telefono" placeholder="Telefono">
</div>
<div class="form-group col-md-4">
  <label for="inputEmail4">Celular</label>
  <input type="text" class="form-control" name="celular" placeholder="celular">
</div>

</div>
<div class="form-row">

 
 <div class="form-group col-md-4">
  <label for="inputEmail4">Nombre de contacto</label>
  <input type="text" class="form-control" name="referencia" placeholder="">
</div>
<div class="form-group col-md-4">
  <label for="inputEmail4">Latitud</label>
  <input type="text" class="form-control" name="latitud" placeholder="">
</div>
<div class="form-group col-md-4">
  <label for="inputEmail4">Longitud</label>
  <input type="text" class="form-control" name="longitud" placeholder="">
</div>

</div>
<div class="form-row">
 <div class="form-group col-md-12">
  <label for="inputAddress2">Descripcion</label>
  <input type="text" class="form-control" name="descripcion" placeholder="">
</div>

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
<div class="cold-md-12">
 <button type="submit" class="btn btn-primary ">Cargar</button>
 </div>
</form>
 </div>
@endsection