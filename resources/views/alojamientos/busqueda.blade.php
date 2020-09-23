@extends('alojamientos.index')

@section('alojamiento')
           

            @foreach($ok as $o)

            
            <p>{{$o->direccion}}</p> <br>
            
            @endforeach

@endsection            
            