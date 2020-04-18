<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Formulario simple para reservar habitaciones</title>
    <!-- Google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700&amp;subset=latin-ext" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" />
    <!-- Page style -->
    <link rel="stylesheet" href="/css/pagestyle.css" type="text/css" />
    <!-- Form style -->
    <link rel="stylesheet" href="/css/formstyle.css" type="text/css" /> </head>

<body>
    <div class="container">
       
        <div class="content" style='margin-top:5px'>
            <div class="row">
               
                <article class="col-md-12">
                    <!-- Start Subscribe Form -->
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <form method="post" name="booking" id="booking">
                                <!-- Form Title -->
                                <div class="form-heading text-center">
                                    <div class="title">Formulario simple para reservar habitaciones</div>
                                   
                                </div>
								
								<div class='row' id="resultados_ajax"></div>
                                <!-- First & Last Name -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nombres</label>
                                        <input type="text" name="nombres" id="nombres" required /> 
									</div>
                                    <div class="col-md-6">
                                        <label>Apellidos</label>
                                        <input type="text" name="apellidos" id="apellidos" required /> 
									</div>
                                </div>
                                <!-- Email & Phone  -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Correo electrónico</label>
                                        <input type="email" name="email" id="email" required/> 
									</div>
                                    <div class="col-md-6">
                                        <label>Teléfono</label>
                                        <input type="text"  name="telefono" id="telefono" required /> 
										
									</div>
                                </div>
								
								<div class="row">
                                    <div class="col-md-8">
                                        <label>Calle</label>
                                        <input type="text" name="calle" id="calle" required /> 
									</div>
                                    <div class="col-md-4">
                                        <label>Nº</label>
                                        <input type="text" name="calle_numero" id="calle_numero" required /> 
									</div>
                                </div>
								
								<div class="row">
                                    <div class="col-md-4">
                                        <label>Ciudad</label>
                                        <input type="text" name="ciudad" id="ciudad" required /> 
									</div>
                                    <div class="col-md-4">
                                        <label>Código postal</label>
                                        <input type="text" name="codigo_postal" id="codigo_postal" required /> 
									</div>
									<div class="col-md-4">
                                        <label>País</label>
                                        <input type="text" name="pais" id="pais" required /> 
									</div>
                                </div>
								
								<div class="row">
                                    <div class="col-md-6">
                                        <label>Fecha ingreso</label>
                                        <input type="text" class='datepicker' name="ingreso" id="ingreso" required /> 
									</div>
                                    <div class="col-md-6">
                                        <label>Fecha salida</label>
                                        <input type="text"  class='datepicker' name="salida" id="salida" required/> 
									</div>	
                                </div>
								
								<div class="row">
                                    <div class="col-md-6">
                                        <label>Personas</label>
                                        <select class='form-control' required name="personas" id="personas">
										  <option value="">--Selecciona--</option>
										  <option value="1">1</option>
										  <option value="2" selected="">2</option>
										  <option value="3">3</option>
										</select>
									</div>
                                    <div class="col-md-6">
                                        <label>Habitaciones</label>
                                        <select class="form-control" required name="habitaciones" id="habitaciones">
											<option value="">--Selecciona--</option>
											<option value="Deluxe" selected="">Con baño</option>
											<option value="Básico">Sin baño</option>
										  </select> 
									</div>	
                                </div>
								<br>
                               <div class='row'>
								<div class='col-md-12'>
									<label>Por favor describa sus necesidades, p. Camas supletorias, cunas para niños</label>
									<input type="textarea" name="comentario" id="comentario" >
								</div>
							   </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="adam-button">ENVIAR</button></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Form JS -->
    <script src="js/formscript.js" type="text/javascript"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script type="text/javascript">
        
		
		$('.datepicker').datepicker({
			format: 'dd/mm/yyyy',
			startDate: '-3d'
		});
		$( "#booking" ).submit(function( event ) {
		  var parametros = $(this).serialize();
		  $.ajax({
				type: "POST",
				url: "enviar-mail.php",
				data: parametros,
				 beforeSend: function(objeto){
					$("#resultados_ajax").html("Enviando...");
				  },
				success: function(datos){
					$("#resultados_ajax").html(datos);
				}
		});
	
		  event.preventDefault();
		});
    </script>
	
</body>
</html>