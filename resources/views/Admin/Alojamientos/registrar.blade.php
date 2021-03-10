@extends('Admin.index')


@section('contenido')
<div class="col-md-12 contenido-dos">
<h1 align="center" id="RegistrarAlojamiento">Registrar Alojamiento</h1>
<form action="{{route('RegistrarAlojamiento')}}" method="POST">
  {{csrf_field()}}
  <div class="form-row">
   
   <div class="form-group col-md-5">
    <label for="inputEmail4">Nombre del Alojamiento</label>
    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
    @if ($errors->has('nombre'))
            <small class="form-text text-danger">{{ $errors->first('nombre') }}</small>
     @endif
  </div>
  <div class="form-group col-md-5">
  <label for="inputEmail4">Nombre de contacto</label>
  <input type="text" class="form-control" name="referencia" placeholder="">
   @if ($errors->has('referencia'))
        <small class="form-text text-danger">{{ $errors->first('referencia') }}</small>
     @endif
</div>
  
</div>
<div class="form-row">
   <div class="form-group col-md-4">
    <label for="inputState">Ciudad</label>
    <select id="ciudad" class="form-control" name="idciudad">
      <option selected value="{{null}}">Ciudades</option>

      @foreach($ciudades as $ciudad)
      <option value="{{$ciudad['id']}}">
        {{$ciudad['descripcion']}}
      </option>
      @endforeach

    </select>
    @if ($errors->has('idciudad'))
        <small class="form-text text-danger">{{ $errors->first('idciudad') }}</small>
     @endif
  </div>
 <div class="form-group col-md-6">
  <label for="inputAddress">Direccion</label>
  <input type="text" class="form-control" name="direccion" placeholder="">
   @if ($errors->has('direccion'))
            <small class="form-text text-danger">{{ $errors->first('direccion') }}</small>
     @endif
</div>

</div>

<div class="form-row">

 <div class="form-group col-md-4">
  <label for="inputEmail4">Correo</label>
  <input type="email" class="form-control" name="correo" placeholder="Correo">
   @if ($errors->has('correo'))
        <small class="form-text text-danger">{{ $errors->first('correo') }}</small>
     @endif
</div>
<div class="form-group col-md-3">
  <label for="inputEmail4">Telefono</label>
  <input type="text" class="form-control" name="telefono" placeholder="Telefono">
   @if ($errors->has('telefono'))
        <small class="form-text text-danger">{{ $errors->first('telefono') }}</small>
     @endif
</div>
<div class="form-group col-md-3">
  <label for="inputEmail4">Celular</label>
  <input type="text" class="form-control" name="celular" placeholder="celular">
   @if ($errors->has('celular'))
        <small class="form-text text-danger">{{ $errors->first('celular') }}</small>
     @endif
</div>
</div>


<div class="form-row">
 <div class="form-group col-md-10">
  <label for="inputAddress2">Descripcion</label>
  <input type="text" class="form-control" name="descripcion" placeholder="">
</div>

</div>

<div class="form-row">
 
 <div class="form-group col-md-5">
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
<div class="form-group col-md-5">
  <label for="inputState">Categoria</label>
  <select name="categoria" class="form-control">
    <option selected value="{{null}}">---Elegir Categoria---</option>
    <option value="{{6}}">No soy un hotel</option>
    <option>5</option>
    <option>4</option>
    <option>3</option>
    <option>2</option>
    <option>1</option>
  </select>
  @if ($errors->has('categoria'))
        <small class="form-text text-danger">{{ $errors->first('categoria') }}</small>
     @endif
</div>

</div>
<div class="cold-md-12">
 <button type="submit" class="btn btn-primary ">Cargar</button>
 </div>
</form>
</div>
@endsection