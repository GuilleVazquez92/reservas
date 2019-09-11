@extends('Plantilla')

@section('seccion')

    <title>Aerolineas</title>
  </head>
  <body>
   <div class="container m-4">
     <h1 class="display-4">
       Aerolineas
     </h1>
     <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Last</th>
      
    </tr>
  </thead>
  <tbody>
     @foreach($datos as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->Nombre}}</td>
      <td>the Bird</td>
      
    </tr>
    @endforeach
  </tbody>
   
  </tbody>
</table>


   </div>

    <!-- Optional JavaScript -->
@endsection