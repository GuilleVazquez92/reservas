@extends('Plantilla')


@section('seccion')
<div col-md-12>
  <br>
</div>
<h1 align="center" id="alojamiento">Registrar Pais</h1>
<div col-md-12>
  <br>
</div>

<form action="{{route('paisess')}}" method="POST">
  {{csrf_field()}}
  <label >Pais</label>
  <input type="text" name="descripcion" placeholder="--Ingrese Pais--" class="form-control" >
  <button type="submit" class="btn btn-primary ">Cargar</button>
</form>

<br>
<br>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
   @foreach($paises as $pais)
   <tr>
    <th scope="row">{{$pais->id}}</th>
    <td>{{$pais->descripcion}}</td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection