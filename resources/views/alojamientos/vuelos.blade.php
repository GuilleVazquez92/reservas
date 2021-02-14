<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- DATATABLES -->
    <!--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <style>
        th,td {
            padding: 0.4rem !important;
        }
        body>div {
            box-shadow: 10px 10px 8px #888888;
            border: 2px solid black;
            border-radius: 10px;
        }
    </style>
    <title>Vuelos</title>
</head>
<body>
    <div class="container">
    <table id="tablax" class="table table-striped table-bordered" style="width:100%">
        <tbody>
            <tr>
                <th>Numero</th>
                <th>Duracion</th>
                <th>Precio</th>
                <th>Salida</th>
                <th>Fecha</th>
                <th>Llegada</th>
                <th>Fecha</th>
                <th>horario</th>
                <th>Salida</th>
                <th>Fecha</th>
                <th>Llegada</th>
                <th>Fecha</th>
                <th>horario</th>
            </tr>
            @foreach($body->data as $flight) 
                                <tr> 
                                  
                                  <td>{{$flight->id}}</td>
                                  <td>{{parsearDuracionEstimada($flight->itineraries[0]->duration)}}</td>
                                  <td>{{$flight->price->total}}</td>
                                  @foreach($flight->itineraries[0]->segments as $seg)

                                  
                                  <td><p>{{$seg->departure->iataCode}}</p><p>{{parsearHorarioDeVuelo($seg->departure->at)}}</p></td>
                                  <td>{{parsearFechaDeVuelo($seg->departure->at)}}</td>
                                  <td>{{$seg->arrival->iataCode}}</td>
                                  <td>{{parsearFechaDeVuelo($seg->arrival->at)}}</td>
                                  <td>{{parsearHorarioDeVuelo($seg->arrival->at)}}</td>
                                 

                                  @foreach($flight->itineraries[1]->segments as $seg)

                                  
                                  <td>{{$seg->departure->iataCode}}</td>
                                  <td>{{parsearFechaDeVuelo($seg->departure->at)}}</td>
                                  <td>{{parsearHorarioDeVuelo($seg->departure->at)}}</td>
                                  <td>{{$seg->arrival->iataCode}}</td>
                                  <td>{{parsearFechaDeVuelo($seg->arrival->at)}}</td>
                                  <td>{{parsearHorarioDeVuelo($seg->arrival->at)}}</td>
                                    @endforeach 

                                  <form action="{{route('mostrarPago')}}" method="POST">
                                    {{csrf_field()}}    

                                     <input type="hidden" value="{{$flight->price->total}}" name="precio">
                                      
                                  @endforeach 
                                  
                                 <th><button class="input">Reservar</button></th>
                                </form>
                                </tr>
                                @endforeach
                   </tbody>
    </table>
</div>


    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>
 
</body>
</html>