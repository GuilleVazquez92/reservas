@extends('alojamientos.index')

@section('alojamiento')
           

            @foreach($p as $a)

            
            <p>{{$a}}</p> <br>
            
            @endforeach

@endsection            
            