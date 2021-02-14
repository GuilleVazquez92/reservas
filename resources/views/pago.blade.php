<html>
  <head>
 
</head>
  <body>
 
<div class="content" align="center">
    <h1>Compra de Prueba</h1>
    <h3>{{$monto*100}}</h3>
    <form action="{{route('pagos')}}" method="POST">
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
    </form>
</div>
 
</body>       
</html>