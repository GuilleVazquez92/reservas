@extends('UserAdmin.index')

@section('contenido')


<form action="{{route('pagos')}}" method="POST">
 

 <input type="hidden" value="{{$x}}" name="precio">
 <input type="hidden" value="{{$id}}" name="id">

 </form>


@endsection