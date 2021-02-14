<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- DATATABLES -->
    <!--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.structure.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <style>
        th,td {
            padding: 0.4rem !important;
        }
        body>div {
            box-shadow: 10px 10px 8px #888888;
            border: 2px solid black;
            border-radius: 10px;
        }
  
                #global {
                 width:800px; height:185px;
                 margin: 0 auto 0 auto;
                 background-color: #ffffff;
                }
                #cabecera {
                 width:800px;
                 margin: 0 auto 0 auto;
                 background-color: #B40068;
                }
                #navegacion {
                 width:780px;
                 margin: 0 auto 0 auto;
                 background-color: #B4CD00;
                }
                #principal {
                 width:620px;
                 margin: 0 auto 0 auto;
                 background-color: #ffffff;
                 float: left;
                 border-style: solid;
                }
                .anuncios1 {
                 width:180px ;
                 height:158px;
                 margin: 0 auto 0 auto;
                 background-color: #ffffff;
                 float: right;
                 border-style: solid;
                }
                #pie {
                 width:800px;
                 margin: 0 auto 0 auto;
                 background-color: #B4C355;
                 float: left;
                }
                #mitad {
                 width:120px;
                 height:76px;
                 margin: 0 auto 0 auto;
                 background-color: #ffffff;
                 float: left;

                }
                p {
  				color:black !important;
  	
					}
</style>
    </style>

    <title>Tu Viaje</title>
<!--

Template 2095 Level

http://www.tooplate.com/view/2095-level

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="alojamientos/font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="alojamientos/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="alojamientos/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="alojamientos/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="alojamientos/css/datepicker.css"/>
    <link rel="stylesheet" href="alojamientos/css/tooplate-style.css">                                   <!-- Templatemo style -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">


   
</head>

    <body>
    	<div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="/dist/img/logo.PNG" alt="Site logo" style=" width: 100px; height: 100px;">
                                Tu Viaje
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#top">Inicio<span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-4">Vuelos</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-5">Trasporte</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-6">Contacto</a>
                                  </li>
                                </ul>
                            </div>                            
                        </nav>            
                    </div>
                </div>
            </div>




	<h1 align="center">Lista de vuelos</h1>

  @foreach($body->data as $flight) 
  
	@foreach($flight->itineraries[0]->segments as $seg)
	<div id="global">
 		
 		<div id="principal">
 				<div id="mitad">
							 <p>Latam	 
							 </P>
							 <p > 
							 	&nbsp;&nbsp;&nbsp;<i class="fas fa-plane"></i>
							 </p>
							 <p>---</p>
				</div>
				<div id="mitad">
							<p > {{$seg->departure->iataCode}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right" ></i></P>
							 <p> {{parsearHorarioDeVuelo($seg->departure->at)}}</P>
							 <p>----</p>
				</div>
				<div id="mitad">
							 <p>{{$seg->arrival->iataCode}}</P>
							 <p> {{parsearHorarioDeVuelo($seg->arrival->at)}}</P>
							 		<p>----</p>
				</div>
				<div id="mitad">
							 <p >{{parsearFechaDeVuelo($seg->departure->at)}}</P>
							 <p ><i class="far fa-clock"></i> <tr>{{parsearDuracionEstimada($flight->itineraries[0]->duration)}}</P>
							 	<p>----</p>
				</div>
				<div id="mitad">
							 <p> 1 escala</P>
							 <p> <a href="">Ver detalles</a></P>
							 <p>---</p>	
				</div>		
				 	 	
 		</div>
 		@endforeach
 		<div class="anuncios1" align="center">
					 <p> <h4>USD {{$flight->price->total}}</h4> </P>
					 	<p>Precio por adulto</p>
					  <button type="button" class="btn  bg-gradient-danger ">Elegir</button>
					 
 			</div>
 			 </div>

 
 @endforeach 	

 
	



<footer class="tm-bg-dark-blue">
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                        Copyright &copy; <span class="tm-current-year">2020</span> Guillermo Vazquez</p>        
                    </div>
                </div>                
            </footer>
        </div>
</body>
</html> 