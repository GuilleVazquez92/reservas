@extends('alojamientos.PlantillaAloja')

@section('ContenidoAloja')
 <div class="col-md-12 contenido-uno">
<h3 align="center">Imagenes</h3>
         <form action="{{route('fotos')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                        
                        <label for="inputState">Confirma tu alojamiento</label>
                        <select id="alojamiento" class="form-control" name="idalojamiento">
                            <option selected>---Seleccione tus Alojamientos----</option>

                                         @foreach($alojamientos as $alojamiento)
                            <option value="{{$alojamiento -> id}}">
                                        {{$alojamiento['descripcion']}}
                            </option>
                                         @endforeach

                          </select>
             </div>
                  <div class="form-group">
                      <label for="exampleFormControlFile1">Seleccione Imagenes de SU ALOJAMIENTO</label>
                        
                        <input type="file" id="imagen" name="imagen" accept="image/*" /><br>
   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Orden</label>
    <div class="col-sm-10">
      <input type="int" name="orden" placeholder="" /><br>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="int" name="path" placeholder="" /><br>
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
      <th> {{$foto['id']}}</th>
      <td> {{$foto['idalojamiento']}}</td>
      <td> {{$foto['orden']}}</td>
      <td> {{$foto['path_imagen']}}</td>
      <td><img src="{{$foto['codigo_imagen']}}" alt="" style=" width: 150px; height: 150px;"> </td>
      
    </tr>
      @endforeach
  </tbody>
</table>
</div>
                
@endsection