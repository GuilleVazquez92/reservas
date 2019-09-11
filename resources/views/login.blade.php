 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alojamientos</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body class="centro">
  <br>
  <br>
  <br>
  <br>
<form>

  <h1 class="ache">INICIAR SESION</h1>
  
  <div class="inset">
  <p>
    <label for="email">Correo</label>
    <input type="text" name="email" id="email">
  </p>
  <p>
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password">
  </p>
  <p>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Recordarme</label>
  </p>
  </div>
  <p class="p-container">
    <a href="">Registrarse</a>
    <input type="submit" name="go" id="go" value="INGRESAR">
  </p>
</form>
</body>

</html>