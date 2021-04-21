<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>PAGO</title>
</head>
<body>
 
    <p>Hola {{$cliente}}! Gracias por su pago !</p>
 
     <ul>
        <li>Cliente: {{ $cliente }}</li>
        <li>Reserva: {{ $nombre }}</li>
        <li>Precio: {{ $precio }}</li>
    </ul>
    <p>
    fechas Reservadas:</p>
    <ul>
        <li>Entrada: {{ $fecha_entrada }}</li>
        <li>Salida: {{ $fecha_salida }}</li>
        <li>Ticket Nº {{$ticket}}
              </li>
    </ul>
       <p>Puede descargar su Ticket en el siguiente enlace:</p>
    <a href="{{url('pago/pdf')}}">DESCARGAR TICKET DE PAGO</a>
</body>
</html>