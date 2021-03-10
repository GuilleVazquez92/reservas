<html>
<head>
  <title>Confirmación</title>
</head>
<body>
	
	<h2> Hola {{$name}}, confirma tu correo</h2>
	<p>Confirma tu correo</p>
	<p>Dale click al siguiente enlace</p>

	<a href="{{url('register/verify/'.$confirmation_code)}}">
		
		Click para confirmar tu correo
	</a>

</body>
</html>