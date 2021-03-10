@extends('Admin.index')

@section('contenido')
<div class="col-md-12 contenido-uno">
<h3 align="center">Imagenes</h3>
         <form action="{{route('fotos')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                        
                        <label for="inputState">Confirma tu alojamiento</label>
                        <select id="alojamiento" class="form-control" name="idalojamiento">
                            <option selected value="{{null}}">---Seleccione tus Alojamientos----</option>

                                         @foreach($alojamientos as $alojamiento)
                            <option value="{{$alojamiento -> id}}">
                                        {{$alojamiento['nombre']}}
                            </option>
                                         @endforeach

                          </select>
                              @if ($errors->has('idalojamiento'))
            <small class="form-text text-danger">{{ $errors->first('idalojamiento') }}</small>
     @endif
             </div>
                  <div class="form-group">
                      <label for="exampleFormControlFile1">Seleccione Imagenes de SU ALOJAMIENTO</label>
                        
                        <input type="file" id="imagen" name="imagen" accept="image/*" /><br>
                            @if ($errors->has('imagen'))
            <small class="form-text text-danger">{{ $errors->first('imagen') }}</small>
     @endif
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Orden</label>
    <div class="col-sm-10">
      <input type="int" name="orden" placeholder="" /><br>
          @if ($errors->has('orden'))
            <small class="form-text text-danger">{{ $errors->first('orden') }}</small>
     @endif
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="int" name="path" placeholder="" /><br>
          @if ($errors->has('path'))
            <small class="form-text text-danger">{{ $errors->first('path') }}</small>
     @endif
    </div>
  </div>
                        
                        
                        <input type="submit" value="Subir"/>
                 </div>
        </form>



<h3 align="center">Fotos Cargadas</h3><br>
<table class="table" name="">
  <thead class="thead-dark">
    
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Alojamiento</th>
      <th scope="col">Orden</th>
      <th scope="col">Nombre</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($fotos as $foto)
      @foreach($alojamientos as $alojamiento)
      @if($foto->idalojamiento == $alojamiento->id)
      <th> {{$foto['id']}}</th>
      <td> {{$foto['idalojamiento']}}</td>
      <td> {{$foto['orden']}}</td>
      <td> {{$foto['path_imagen']}}</td>
      <td><img src="{{$foto['codigo_imagen']}}" alt="" style=" width: 150px; height: 150px;"> </td>
      @endif
    </tr>
      @endforeach
      @endforeach
  </tbody>
</table>
</div>
@endsection