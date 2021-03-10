@extends('UserAdmin.index')
@section('contenido')
 
<div class="content" align="center">
    <h1>Pago</h1>
    <h3>{{$monto}}</h3>
    <form action="{{route('pagosvuelos')}}" method="POST">
        {{ csrf_field() }}
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ config('services.stripe.key') }}"
            data-amount="{{$monto*100}}"
            data-name="Compra"
            data-description="Prueba compra"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto">
        </script>
        <input type="hidden" value="{{$monto*100}}" name="precio">
        <input type="hidden" value="{{$id}}" name="id">
    </form>
</div>
 
@endsection